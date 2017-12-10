<script type="colorScheme" class="swatch active">
{
"name":"Default",
"bgBody":"3f4040",
"link":"555555",
"color":"000000",
"bgItem":"ffffff",
"title":"000000"
}

</script>
  <body paddingwidth="0" paddingheight="0" class='bgBody' style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
    <style type="text/css">
    body {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    margin:0 !important;
    width: 100% !important;
    -webkit-text-size-adjust: 100% !important;
    -ms-text-size-adjust: 100% !important;
    -webkit-font-smoothing: antialiased !important;
    }
    .tableContent img {
    border: 0 !important;
    display: inline-block !important;
    outline: none !important;
    }
    p, h1,h2,h3,ul,ol,li,div{
    margin:0;
    padding:0;
    }
    h1,h2{
    font-weight: normal;
    background:transparent !important;
    border:none !important;
    }
    td,table{
    vertical-align: top;
    }
    td.middle{
    vertical-align: middle;
    }
    a{
    text-decoration: none;
    }
    a.link1{
    font-size: 16px;
    color: #a5a5a5;
    }
    a.link2{
    font-size: 18px;
    font-weight: bold;
    color: #000000;
    text-decoration: underline;
    }
    a.link3{
    font-size: 15px;
    font-weight: bold;
    color: #333;
    background-color: #ddd;
    padding: 11px 15px;
    text-decoration: none;
    border-radius:5px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    text-align: center;
    display:inline-block;
    }
    .contentEditable li{
    }
    h1{
    font-size: 24px;
    font-weight: bold;
    color: #000000;
    line-height: 150%;
    }
    h2{
    font-size: 18px;
    font-weight: bold;
    color: #000000;
    line-height: 150%;
    height:60px;
    }
    p{
    font-size: 16px;
    color: #000000;
    line-height: 150%;
    text-align: left;
    }
    .bgItem{
    background: #ffffff;
    }
    .bgBody{
    }
    td div.icon
    {
      width: 30px;
      height: 30px;
      margin: 0 auto;
      position: relative;
      border-radius: 50%;
      vertical-align: middle;
      background-color: #fff;
    }
    td div.icon .fa
    {
      color: #09b0ef;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
         -moz-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
           -o-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
    }
    .fa
    {
      color: white;
      text-align: center;
    }
    .bg-blue {
      background-color: #25aae2; }

    .text-blue {
      color: #25aae2; }

    .bg-yellow {
      background-color: #ffca08; }

    .text-yellow {
      color: #ffca08; }

    .bg-green {
      background-color: #a6ce39; }

    .text-green {
      color: #a6ce39; }

    .bg-pink {
      background-color: #ed008c; }

    .text-pink {
      color: #ed008c; }
    </style>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"  style='font-family:Helvetica, sans-serif;'>
      
      
      <tr>
        <td align='center' class='movableContentContainer'>
          
          <!-- =============== START HEADER =============== -->
          <div class='movableContent'>
            <table width="1024" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr><td height='20'></td></tr>
              <tr>
                <td>
                  <div class="contentEditableContainer contentImageEditable">
                    <div class="contentEditable">
                        <img src="{{ asset('images/boletin/btn_cabeza.jpg') }}" alt="Funda epekeina" data-default="placeholder" width="1024" data-max-width="1024" style="margin:0 auto;">
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <!-- =============== END HEADER =============== -->
          <!-- =============== START BODY =============== -->
          @if(!empty($principal))
          <div class='movableContent'>
            <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr><td height='20'></td></tr>
              <tr>
                <td>
                  <table width="95%" class="bg-blue" border="0" cellspacing="0" cellpadding="0" align="center" class='bgItem' style='border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;'>
                    <tr><td colspan="5" height='30'></td></tr>
                    <tr>
                      <td width='20'></td>
                      <td width='350'>
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            @if(count($principal->imagenes) > 0)
                            <img src="{{ asset('images/news/'.$principal->imagenes->first()->image) }}" alt="{{ $principal->titles->first()->text }}" width='300' height='300' data-default="placeholder" data-max-width="150">
                            @else
                            <img src="" alt="image" width='300' height='300' data-default="placeholder" data-max-width="150">
                            @endif
                          </div>
                        </div>
                      </td>
                      <td width='28'></td>
                      <td width='350'>
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <h2 style='font-size: 24px;'>{{ $principal->titles->first()->text }}</h2>
                            <br/>
                            <p>{{ substr(strip_tags($principal->descriptions->first()->text), 0, 300) }} [...]</p>
                            <br/><br/>
                            <p style='text-align: right;'><a target='_blank' href="{{ URL::to('noticias/ver/'.$principal->slugs->first()->text) }}"  class='link2' >Leer mas</a></p>
                          </div>
                        </div>
                      </td>
                      <td width='20'></td>
                    </tr>
                    <tr><td colspan="5" height='30'></td></tr>
                  </table>
                </td>
                <td>
                  <table width="25%" border="0" cellspacing="0" cellpadding="0" align="center" class='bgItem' style='border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;'>
                    <tr>
                      <td width='256' style="text-align:center;">
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable">
                            <a href="{{ URL::to('contacto/donaciones') }}" target="_blank"><img src="{{ asset('images/boletin/btn_dona.jpg') }}" alt="donaciones | fundaepekeina.org" width='256' height='276' data-default="placeholder" data-max-width="256"></a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr style="margin-top:16px;background-color:#a6ce39;">
                            <td width="256" style="padding:0.5em 1em;">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                  Siguenos en:
                                  <hr>
                                </tr>
                                <tr style="text-align:center;">
                                  <td>
                                    <div class="icon"><a href="https://twitter.com/fundaepekeina"><i class="fa fa-twitter"></i></a></div>
                                  </td>
                                  <td>
                                    <div class="icon"><i class="fa fa-instagram"></i></div>
                                  </td>
                                  <td>
                                    <div class="icon"><a href="https://www.facebook.com/funda.epekeina"><i class="fa fa-facebook"></i></a></div>
                                  </td>
                                  <td>
                                    <div class="icon"><a href="https://www.youtube.com/user/fundaepekeina"><i class="fa fa-youtube"></i></a></div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          @endif
          <div class='movableContent'>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr><td height='20'></td></tr>
              <tr>
                <td>
                  <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="acd146" style='border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;'>
                    <tr><td colspan="3" height='11'></td></tr>
                    <tr>
                      <td width='20'></td>
                      <td>
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable">
                            <p style='font-size: 30px; text-align: center;color: #ffffff;line-height: 150%;'>Noticias </p>
                          </div>
                        </div>
                      </td>
                      <td width='20'></td>
                    </tr>
                    <tr><td colspan="3" height='11'></td></tr>
                  </table>
                </td>
              </tr>
            </table>
            
          </div>
          <div class='movableContent'>
            <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td colspan="4" height='20'></td>
              </tr>
              <tr>
                <td width="20"></td>
                <td width="75%">
                  <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <?php $j = 0; ?>
                    @foreach($article as $a)
                    @if($j == 0 || ($j != 0 && $j%2 == 0))
                    <tr>
                    @endif
                      <td width='49%' class='' style='border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;margin:0.5%;'>
                        <table width="95%" class="bg-{{ $colors[$j] }}" style="margin-bottom:10px;padding: 10px 15px;" border="0" cellspacing="0" cellpadding="0" align="center" >
                          <tr><td colspan="3" height='20'></td></tr>
                          <tr>
                            <td width='20'></td>
                            <td width='100%' height="250" align="middle">
                              <div class="contentEditableContainer contentImageEditable">
                                <div class="contentEditable">
                                  @if(count($a->imagenes) > 0)
                                    <img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" alt="{{ $a->titles->first()->text }}" width='100%' data-default="placeholder" data-max-width="150">
                                @else
                                    <img src="{{ asset('images/logo.png') }}" alt="{{ $a->titles->first()->text }}" height="200" data-default="placeholder" data-max-width="150">
                                @endif
                                </div>
                              </div>
                            </td>
                            <td width='20'></td>
                          </tr>
                          <tr><td colspan="3" height='20'></td></tr>
                          <tr>
                            <td width='20'></td>
                            <td width='150' height='50' style="height: 100px;">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <h2 style='text-align: left;'>{{ $a->titles->first()->text }}</h2>
                                </div>
                              </div>
                            </td>
                            <td width='10'></td>
                          </tr>
                          <tr><td colspan="3" height='20'></td></tr>
                          <tr>
                            <td width='20'></td>
                            <td width='150' style="height: 190px;">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <p style='text-align: justify;'>{{ substr(strip_tags($a->descriptions->first()->text), 0, 300) }} [...]</p>
                                </div>
                              </div>
                            </td>
                            <td width='20'></td>
                          </tr>
                          <tr><td colspan="3" height='20'></td></tr>
                          <tr>
                            <td width='20'></td>
                            <td width='150'  >
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <p style='text-align: center;'><a target='_blank' href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}" class='link3' style='color:#333;'>Leer mas</a></p>
                                </div>
                              </div>
                            </td>
                            <td width='20'></td>
                          </tr>
                          <tr><td colspan="3" height='20'></td></tr>
                        </table>
                      </td>
                    <?php $j++; ?>
                    @if($j == count($article) || ($j != 0 && $j%2 == 0))
                      <tr>
                    @endif
                    @if($j == 4)
                      <?php $j = 0; ?>
                    @endif
                    @endforeach

                  </table>
                </td>
                <td width="25%">
                  <table width="100%">
                    <tr>
                      <td colspan="3" height='20'></td>
                    </tr>
                    <tr>
                      <td>
                        <table width="256" border="0" cellspacing="0" cellpadding="0" align="center" class='bgItem' style='border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;'>
                          @if(empty($principal))
                          <tr>
                            <td width='256' style="text-align:center;">
                              <div class="contentEditableContainer contentImageEditable">
                                <div class="contentEditable">
                                  <a href="{{ URL::to('contacto/donaciones') }}" target="_blank"><img src="{{ asset('images/boletin/btn_dona.jpg') }}" alt="donaciones | fundaepekeina.org" width='256' height='276' data-default="placeholder" data-max-width="256"></a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr style="margin-top:16px;background-color:#a6ce39;">
                            <td width="256" style="padding:0.5em 1em;">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                <tr>
                                  Siguenos en:
                                  <hr>
                                </tr>
                                <tr style="text-align:center;">
                                  <td>
                                    <div class="icon"><a href="https://twitter.com/fundaepekeina"><i class="fa fa-twitter"></i></a></div>
                                  </td>
                                  <td>
                                    <div class="icon"><i class="fa fa-instagram"></i></div>
                                  </td>
                                  <td>
                                    <div class="icon"><a href="https://www.facebook.com/funda.epekeina"><i class="fa fa-facebook"></i></a></div>
                                  </td>
                                  <td>
                                    <div class="icon"><a href="https://www.youtube.com/user/fundaepekeina"><i class="fa fa-youtube"></i></a></div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          @endif
                          <tr>
                            <td>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                @if(count($hist->imagenes) > 0)
                                <tr>
                                  <td colspan="3" width='100%' align="center">
                                    <div class="contentEditableContainer contentImageEditable">
                                      <div class="contentEditable" style="padding-top:10px;">
                                        <img src="{{ asset('images/news/'.$hist->imagenes->first()->image) }}" alt="{{ $hist->titles->first()->text }}" width='100%' data-default="placeholder" data-max-width="216">
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                @endif
                                <tr>
                                  <td colspan="3" height='20'></td>
                                </tr>
                                <tr>
                                  <td width='20'></td>
                                  <td width='216' height='50'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable">
                                        <h2 style='text-align: left;'>
                                          {{ substr($hist->titles->first()->text,0,100) }}
                                        </h2>
                                        @if(!is_null($hist->subtitle))
                                          <p>{{ $hist->subtitle->titles->first()->text }}</p>
                                        @endif
                                      </div>
                                    </div>
                                  </td>
                                  <td width='20'></td>
                                </tr>
                                <tr><td colspan="3" height='20'></td></tr>
                                <tr>
                                  <td width='20'></td>
                                  <td width='216' height='120'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable">
                                        <p style='text-align: left;'>
                                          {{ substr(strip_tags($hist->descriptions->first()->text), 0, 1200) }}[...]
                                          <br>
                                        </p>
                                      </div>
                                    </div>
                                  </td>
                                  <td width='20'></td>
                                </tr>
                                <tr><td colspan="3" height='20'></td></tr>
                                <tr>
                                  <td width='20'></td>
                                  <td width='216'  >
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable">
                                        <p style='text-align: center;'>
                                          <a target='_blank' href="{{ URL::to('quienes-somos/historias-epekeinas/'.$hist->slugs->first()->text) }}" class='link3' style='color:#333;'>
                                            Leer mas
                                          </a>
                                        </p>
                                      </div>
                                    </div>
                                  </td>
                                  <td width='20'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
                <td width="20"></td>
              </tr>
            </table>
          </div>
          
          <!-- =============== END BODY =============== -->
          <!-- =============== START FOOTER =============== -->
          <div class='movableContent'>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class='bgItem'>
              <tr>
                <td>
                  <table  width="1024" border="0" cellspacing="0" cellpadding="0" align="center" >
                    <tr><td height='20'></td></tr>
                    <tr>
                      <td align='center'>
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" >
                            <p style='color:#a5a5a5;text-align:center;font-size:11px;line-height:19px;'>
                              <a target='_blank' href="#" style='color:#a5a5a5'>Contact us</a>
                              <br><br>
                              Sent by [SENDER_NAME] <br>
                              [CLIENTS.COMPANY_NAME] <br>
                              [CLIENTS.ADDRESS] <br>
                              [CLIENTS.PHONE] <br>
                              <a target='_blank' href="[FORWARD]" style="color:#a5a5a5;">Forward to a friend</a> <br>
                              <a target='_blank' href="[UNSUBSCRIBE]" style='color:#a5a5a5;'>Unsubscribe</a>
                            </p>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr><td height='20'></td></tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
          <!-- =============== END FOOTER =============== -->
          
        </td>
      </tr>
    </table>
  </body>
