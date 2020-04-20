
@extends('layouts.app')
@section('title')
Règlement
@stop
@section('content')

<div class="container ">
    <div class="row flex-center ">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 p-5 rounded border border-secondary">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>ECE ebay</strong>
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: {{now()}}</em>
                    </p>
                    <p>
                        <em>Receipt #: {{rand(3000000,999999999)}}</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                <table class="table">
                    <tbody>
                        <tr class="flex-center">
                            <td class="text-right"><h4><strong>Montant Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>{{$prix}}€</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Payer Maintenant   <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
            </div>
        </div>
    </div>
@stop