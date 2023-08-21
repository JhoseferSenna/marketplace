<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ProductPhoto;


class ProductPhotoController extends Controller
{

    public function removePhoto(Request $request){
        //Buscar a foto no Bando de dados, pelo Id
        $photoName = $request->get('photoName');
        //Remover dos arquivos
        if(Storage::disk('public')->exists($photoName)){
            Storage::disk('public')->delete($photoName);
        }
        //Remover a imagem do Banco de Dados
        $photoId = $request->get('photoId');
        $removePhoto = ProductPhoto::where('id', $photoId);
        $productId = $removePhoto->first()->product_id;
        $removePhoto->delete();
        flash('Image Removida com Sucesso!')->success();
        return redirect()->route('admin.products.edit', ['product'=> $productId]);
    }
}
