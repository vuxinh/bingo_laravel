<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bingo</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!} ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script> 
    
    
</head>
<body>
    <input id = "btn" type="button" value=" Click" style ="  padding: 10px ; width: 80px ">
    <div class="bigNumberDisplay ">
            <span id="numCounter" style="color:#194BB3">0</span>
            <span class="mirage" id="mirageElement"></span>
            <p id="card_id">{{ $card_id }}</p>
            <div  id="bingoWords"></div>
        </div>
    
    
                        <table id = "table1" border = "1"  >
                                <tbody>
                                        <tr>
                                            <td class="normal" id="cell00">&nbsp;</td>
                                            <td class="normal" id="cell01">&nbsp;</td>
                                            <td class="normal" id="cell02">&nbsp;</td>
                                            <td class="normal" id="cell03">&nbsp;</td>
                                            <td class="red" id="cell04">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="normal" id="cell10">&nbsp;</td>
                                            <td class="normal" id="cell11">&nbsp;</td>
                                            <td class="normal" id="cell12">&nbsp;</td>
                                            <td class="normal" id="cell13">&nbsp;</td>
                                            <td class="red" id="cell14">&nbsp;</td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="normal" id="cell20">&nbsp;</td>
                                            <td class="normal" id="cell21">&nbsp;</td>
                                            <td class="normal" id="cell22">&nbsp;</td>
                                            <td class="normal" id="cell23">&nbsp;</td>
                                            <td class="red" id="cell24">&nbsp;</td>
                                            
                                        </tr>
                                        <tr>
                                            <td class="normal" id="cell30">&nbsp;</td>
                                            <td class="normal" id="cell31">&nbsp;</td>
                                            <td class="normal" id="cell32">&nbsp;</td>
                                            <td class="normal" id="cell33">&nbsp;</td>
                                            <td class="red" id="cell34">&nbsp;</td>
                                            
                                        </tr>
                                        <tr>
                                                <td class="normal" id="cell40">&nbsp;</td>
                                                <td class="normal" id="cell41">&nbsp;</td>
                                                <td class="normal" id="cell42">&nbsp;</td>
                                                <td class="normal" id="cell43">&nbsp;</td>
                                                <td class="red" id="cell44">&nbsp;</td>
                                                
                                            </tr>
                                    </tbody>
                            </table>
 
                                    <table id = "table2" border = "1">
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr>  <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr>
                                        <tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr> 
                                    </table>
                               
    <script src="{!! asset('js/random.js')!!}"></script>                    
            </body>
            </html>