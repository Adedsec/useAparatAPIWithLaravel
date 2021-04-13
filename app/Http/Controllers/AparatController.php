<?php

namespace App\Http\Controllers;

use App\Exceptions\CannotGetFormActionException;
use App\Services\Aparat\AparatHandler;
use Illuminate\Http\Request;

class AparatController extends Controller
{


    /**
     * @var AparatHandler
     */
    private $aparatHandler;

    public function __construct(AparatHandler $aparatHandler)
    {
        $this->aparatHandler = $aparatHandler;
    }

    public function index()
    {
        $videos = $this->aparatHandler->mostViewedVideos();
        return view('videos', compact('videos'));
    }

    public function login()
    {
        $response = $this->aparatHandler->login();
        return response()->json([
            'data' => $response
        ]);

    }

    public function upload(Request $request)
    {

        try {
            $response = $this->aparatHandler->upload($request->get('filename'), $request->get('title'), $request->get('category'));
            return response()->json([
                'data' => $response
            ]);
        } catch (CannotGetFormActionException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }

    }

    public function delete(Request $request)
    {
        $response = $this->aparatHandler->delete($request->get('uid'));
        return response()->json([
            'data' => $response
        ]);
    }

    public function show(Request $request)
    {
        $response = $this->aparatHandler->show($request->get('uid'));
        return response()->json([
            'data' => $response
        ]);
    }
}
