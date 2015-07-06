<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Device;
use Redirect, Input, Auth;

class DeviceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.devices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'uid' => 'required',
			'type' => 'required'
		]);

		$device = new Device;
		$device->uid = Input::get('uid');
		$device->type = Input::get('type');
		// $device->user_id = 1;//Auth::user()->id;

		if ($device->save()) {
			return Redirect::to('admin');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($uid)
	{
		return view('admin.devices.detail', ['device' => Device::where('uid', '=', $uid)->first()]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.devices.edit')->withPage(Device::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'uid' => 'required',
			'type' => 'required'
		]);

		$device = Device::find($id);
		$device->uid = Input::get('uid');
		$device->type = Input::get('type');
		// $device->user_id = 1; //Auth::user()->id;

		if ($device->save()) {
			return Redirect::to('admin');
		} else {
			return Redirect::back()->withInput()->withErrors('保存失败');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$device = Device::find($id);
		$Device->delete();

		return Redirect::to('admin');
	}

}
