<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopicesDetails;
use App\Topices;
use App\Topicstype;
use DB;
use Toastr;

class TopicesDetailsController extends Controller
{
    public function create()
    {

        $topices = Topices::all();
        $topices_type = Topicstype::all();

        return view('backend.topic_details.create', compact('topices', 'topices_type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic_id' => 'required',
            'topices_slug' => 'required',
            'description' => 'required',
        ]);

        $data = new TopicesDetails();


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = date("Ymdhis") . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Public/topics/file'), $file_name);
            $data->file = $file_name;
        }

        if ($request->hasFile('video_path')) {
            $video_file = $request->file('video_path');
            $video_file_name = date("Ymdhis") . '.' . $video_file->getClientOriginalExtension();
            $video_file->move(public_path('Public/topics/video_file'), $video_file_name);
            $data->video_path = $video_file_name;
        }

        $data->topices_id = $request->topic_id;
        $data->topices_slug = $request->topices_slug;
        $data->description = $request->description;
        $data->created_by = $request->created_by;
        $data->save();
        Toastr::info(' Topices Details Added Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('top_de.list', $data->topices_id);
    }

    public function list($slug)
    {

        $all_data = TopicesDetails::with('topices', 'topices_type_name')->where('topices_id', '=', $slug)->get();
        return view('backend.topic_details.list', compact('all_data'));
    }

    public function view($id)
    {
        $data = TopicesDetails::with('topices', 'topices_type_name')->findorfail($id);
        return view('backend.topic_details.view', compact('data'));
    }

    public function edit($id)
    {

        $topices = Topices::all();
        $topicstype = Topicstype::all();
        $data = TopicesDetails::with('topices', 'topices_type_name')->findorfail($id);
        return view('backend.topic_details.edit', compact('data', 'topices', 'topicstype'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'topic_id' => 'required',
            'description' => 'required',
        ]);;

        $data = TopicesDetails::findorfail($request->id);


        if ($request->hasFile('file')) {

            $m = DB::table('topices_details')->where('id', $request->id)->first();
            $old_file = $m->file;
            if (file_exists($old_file)) {
                unlink(public_path('Public/topics/file') . '/' . $data->file);
            }

            $file = $request->file('file');
            $file_name = date("Ymdhis") . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Public/topics/file'), $file_name);
            $data->file = $file_name;
        } else {
            $m = DB::table('topices_details')->where('id', $request->id)->first();
            $file = $m->file;
            $data->file = $file;
        }


        if ($request->hasFile('video_path')) {

            $m = DB::table('topices_details')->where('id', $request->id)->first();
            $old_video_file = $m->video_path;
            if (file_exists($old_video_file)) {
                unlink(public_path('Public/topics/video_file') . '/' . $data->video_path);
            }

            $video_file = $request->file('video_path');
            $video_file_name = date("Ymdhis") . '.' . $video_file->getClientOriginalExtension();
            $video_file->move(public_path('Public/topics/video_file'), $video_file_name);
            $data->video_path = $video_file_name;
        } else {
            $m = DB::table('topices_details')->where('id', $request->id)->first();
            $video_file = $m->video_path;
            $data->video_path = $video_file;
        }

        $data->topices_id = $request->topic_id;
        $data->description = $request->description;
        $data->updated_by = $request->updated_by;
        $data->save();

        Toastr::info(' Topices Details Updated Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('top_de.list', $data->topices_id);
    }

    public function delete($id)
    {
        $data = TopicesDetails::findorfail($id);

        $file = $data->file;
        if (file_exists($file)) {
            unlink(public_path('Public/topics/file') . '/' . $data->file);
        }

        $video_path = $data->video_path;
        if (file_exists($video_path)) {
            unlink(public_path('Public/topics/video_file') . '/' . $data->video_path);
        }

        $data->delete();
        Toastr::error(' Topices Details Deleted Successfully', 'Done', ["positionClass" => "toast-top-right"]);

        return redirect()->route('top_de.list', $data->topices_id);
    }
}
