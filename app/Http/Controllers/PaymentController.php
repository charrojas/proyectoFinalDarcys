<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
    public function payment(Request $request){
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;

       
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->fecha_evento = $request->fecha_evento;
        $cliente->tipo_plan = $request->tipo_plan;

        if ($request->recibir_publicidad=='on') {
            $cliente->recibir_publicidad = 1;
        }
        else {
            $cliente->recibir_publicidad = 0;
        }

        $cliente->save();

        // dd($request->price);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [

                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
              
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->price
                        ]
                ]
                    ]
        ]);

        if(isset($response['id']) && $response['id']!= null){

            foreach ($response['links'] as $link) {
                
                if ($link['rel']  === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }else{
            return redirect()->route('paypal_cancel');
        }

    }


    public function success(Request $request){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            session()->flash('CraerArticulo','Se realizo el pago correctamente');
            return redirect()->route('inicio');
            //RETORNA A UNA VISTA DONDE AGRADEZCA Y DEMAS POR LA COMPRA Y LUEGO A INICIO 
        }else{
           
            return redirect()->route('paypal_cancel');
        }
    }


    public function cancel(){
        session()->flash('Cancelar','Se cancelo la compra del articulo');
          return redirect()->route('planes');
        // VISTA QUE LLEVE A UN POSIBLE PAYPAL CANCELADO 
    }
}
