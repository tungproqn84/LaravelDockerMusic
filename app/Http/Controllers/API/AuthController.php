<?php

namespace App\Http\Controllers\API;

use App\Banner;
use App\Category;
use App\Catergory;
use App\Http\Controllers\Controller;
use App\ListAlbum;
use App\ListMp3;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        $email= $request->email;
        $password= $request->password;
        // $encryptpass= Hash::make($password);
        $result= DB::table('users')->where('email', $email)->where('password', $password)->first();
        if($result)
        {
            return response() ->json([
                "success" =>true,
                "name" => $result->name,
                "isLogin" =>true
            ]);
        }
        else{
            return response()->json([
                "success" =>false
            ]);
        }
    }
        public function register(Request $request){
            $user= new User();
            try {
                // $result= DB
                $user->email = $request->email;
                $user->password = $request->password;
                $user->name = $request->name;
                $user-> save();
                return  $success =true;
            } catch (Exception $e) {
                return $success=false;
            }
        }

        //get homepage
        public function getsonghome(){
            $listsong= ListMp3::orderBy('IDSong')->limit(10)->get();
            return $listsong;
        }
        public function getalbumhome(){
            $listalbum= ListAlbum::orderBy('IDAlbum')->limit(6)->get();
            return $listalbum;
        }
        public function getcategoryhome(){
            $listcategory= Category::orderBy('IDCategory')->limit(6)->get();
            return $listcategory;
        }
        //get list song
        public function listmp3(){
            $listmp3= ListMp3::orderBy('Love','desc')->get();
            return $listmp3;
        }
        //get list album
        public function listalbum(){
            $liskalbum= DB::table('tblalbum')->get();
            return $liskalbum;
        }
        public function listcategory(){
            $listcategory= DB::table('tblcategory')->get();
            return $listcategory;
        }
        //get list banner
        public function getbanner(){
            $linkbanner= Banner::orderBy('IDBanner','desc')->get();
            return $linkbanner;
        }
        //get list mp3 of album
        public function getlistmp3($id){
            $listsong= DB::table('tblsong')->join('tblalbum','tblsong.IDAlbum','=','tblalbum.IDAlbum')->where('tblsong.IDAlbum',$id)->get();
            return $listsong;

        }
        //get mp3 of category
        public function getlistmp3category($id){
            $listsong= DB::table('tblsong')->join('tblcategory','tblsong.IDCategory','=','tblCategory.IDCategory')->where('tblsong.IDCategory',$id)->get();
            return $listsong;

        }
        // get result search
        public function getsearch($keyword){
            $linksong = ListMp3::where('NameSong', 'like', '%'. $keyword. '%')->get();
            return $linksong;
        }
        //update love music
        public function lovemusic($id){
            $mp3= ListMp3::where('IDSong',$id)->first();
            // echo $mp3; die();
            $mp3->Love +=1;
            $mp3->save();
            $result="ok";
            return $result;
        }




// web services

        //index
        public function index(){
            $mp3= ListMp3::all();
            return view('index', compact('mp3'));
        }
        public function getadddata(){
            $img=0;
            $success=false;
            $album= ListAlbum::all();
            return view('adddata', compact('img','success', 'album'));
        }
        public function postdata(Request $request){
            $songold= ListMp3::all();
            $cat= $request->category;
            $idalbum= $request->idalbum;
            $namesong= $request->namesong;
            $namesinger= $request->namesinger;
            $linksong= $request->linksong;
            $imagesong= $request->imagesong;

                $song= new ListMp3();
                $song->IDCategory= $cat;
                $song->IDAlbum= $idalbum;
                $song->NameSong= $namesong;
                $song->NameSinger= $namesinger;
                $song->LinkSong= $linksong;
                $song->ImageSong= $imagesong;
                $song->save();
                $success=true;
                $message="Đã thêm bài hát";

                $album= ListAlbum::all();
                return view('adddata',compact('success','message','album'));

        }
        public function getaddalbum(){
            $success=false;
            return view('addalbum', compact('success'));
        }
        public function postalbum(Request $request){
            $namealbum= $request->namealbum;
            $namesinger= $request->namesinger;
            $imagealbum= $request->image;
            $album= new ListAlbum();
            $album->NameAlbum= $namealbum;
            $album->NameSinger= $namesinger;
            $album->ImageAlbum= $imagealbum;
            $album->save();
            $success=true;
            $message="Đã thêm album";
            return view('addalbum',compact('success','message'));

        }
        public function delete($id){
            ListMp3::where('IDSong',$id)->delete();
            return redirect()->back();
        }
        public function getedit($id){
            $infor= ListMp3::where('IDSong',$id)->first();
            $album= ListAlbum::all();
            $success=true;
            $message= "Đã sửa";
            return view('edit', compact('infor','album','success','message'));
        }
    }
