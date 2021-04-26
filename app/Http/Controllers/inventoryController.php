<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Inventory;
use App\Channel;
use App\Loan;
use DB;


class InventoryController extends Controller
{
    
    public function index(){

        $channels = DB::table('Channel')->get();
        
        $inventory = DB::table('inventory')
            ->join('channel', 'inventory.channel', '=', 'channel.id')
            ->select('inventory.*', 'channel.nchannel')
            ->get();

            $inventoryToLoan = DB::table('inventory')
            ->join('channel', 'inventory.channel', '=', 'channel.id')
            ->select('inventory.*', 'channel.nchannel')
            ->get();

        return view('inventory.index')->with(compact('inventory','channels', 'inventoryToLoan'));

    }
    
  
    public function AddInventory(Request $request)
    {  
       $data = $request->all();
        DB::table('inventory')->insert([
            ['section' => $data['section'], 'position' => 
            $data['position'], 'state' => $data['state'], 'product' => $data['product'], 'pdrpid' => 
            $data['pdrpid'], 'serial' => $data['serial'], 'code' => 
            $data['code'] , 'channel' =>$data['channel'], 'observation' => $data['observation']]
        ]);

        return redirect('/Inventory')->with('success','Data saved');
       
    }

   
    public function edit($id)
    {

        $inventory = Inventory::find($id);
        $channels = Channel::all();
        return view('inventory.index')->with(compact('inventory','channels'));

    }

    public function update(Request $request, $id=null)
    {

        $data = $request->all();
        $section = $data['section'];
        $position = $data['position'];
        $state = $data['state'];
        $product = $data['product'];
        $pdrpid = $data['pdrpid'];
        $serial = $data['serial'];
        $code = $data['code'];
        $channel = $data['channel'];
        $observation = $data['observation'];

        Inventory::where('id',$id)->update(['section'=>$data['section'], 'position'=>$data['position'], 'state'=>$data['state'], 'product'=>$data['product'], 
        'pdrpid'=>$data['pdrpid'], 'serial'=>$data['serial'], 'code'=>$data['code'], 'channel'=>$data['channel'], 'observation'=>$data['observation']]);
        return redirect('/Inventory')->with('success','Data saved');

    }

//Incio Funciones Para Prestar Un Articulo Del Inventario

    public function joinToLoan_AfterLoan(Request $request, $id=null){
       
        $data=$request->all();
       
        $this->inventoryToLoan($data);
        $this->updateAfterLoan($data, $id);

        return redirect()->back();
    }

    public function inventoryToLoan(array $data)
    {

        DB::table('loan')->insert([
            ['idinventary' => $data['idInv'], 'loancode' => 
            $data['idloan'], 'state' => $data['state'], 'pdrp_id' => $data['pdrpid'], 'serial' => 
            $data['serial'], 'channel' => $data['channel'], 'dateloan' => 
            $data['dateloan'], 'estimateddate' => $data['estimateddate'], 'observation' => $data['observation']]
        ]);

    }

    public function updateAfterLoan(array $data, $id=null)
    {
        //'loancode', 'pdrp_id', 'serial', 'channel', 'idinventary', 'estimateddate', 'realreturn', 'dateloan', 'state', 'pastdays', 'observation'
        
        $loanInventory = DB::table('inventory')
        ->where('id', $id)
        ->update(['code' => $data['idloan'], 'channel' => $data['channel'], 'state' => $data['state']]);

    }

    //Fin Funciones Para Prestar Un Articulo Del Inventario

    public function destroy($id)
    {

        $inventory = Inventory::findOrFail($id);
        $inventory->delete();
     
        return response()->json(['success'=>'Inventary deleted successfully.']);

    }
}
