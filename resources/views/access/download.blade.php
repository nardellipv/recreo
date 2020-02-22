@extends('layouts.app')
@section('content')
    <div class="fp-box">
        <div class="card">
            <div class="body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1">
                            @if($access->access == 'L1')
                                <a href="http://recreo.mikant.xyz/download/grilla/NIVEL%20I%20GRILLA%20DE%20CORRECCI%C3%93N%202019.pdf"
                                   type="button" class="btn btn-block btn-lg btn-success waves-effect"
                                   download="NIVEL I GRILLA DE CORRECCIÓN 2019.pdf" target="_blank" style="color: yellow">NIVEL I GRILLA DE CORRECCIÓN 2019</a>
                            @endif
                            @if($access->access == 'L2')
                                    <a href="http://recreo.mikant.xyz/download/grilla/experimental_intercolegial_clave_correccion_def.pdf"
                                       type="button" class="btn btn-block btn-lg btn-success waves-effect"
                                       download="Dexperimental_intercolegial_clave_correccion_def.pdf" target="_blank" style="color: yellow">Dexperimental_intercolegial_clave_correccion_def</a>

                                    <a href="http://recreo.mikant.xyz/download/grilla/OM_hoja_%20de_respuestas-%20Clave_Correcci%C3%B3n.pdf" type="button"
                                       class="btn btn-block btn-lg btn-success waves-effect"
                                       download="OM_hoja_ de_respuestas- Clave_Corrección.pdf"
                                       target="_blank" style="color: yellow">OM_hoja_ de_respuestas- Clave_Corrección</a>

                                    <a href="http://recreo.mikant.xyz/download/grilla/PRUEBA%20TEORICA%20RP%20GRILLA%20DE%20CORRECCIOIN%20NIVEL%20II%202019.pdf"
                                       type="button"
                                       class="btn btn-block btn-lg btn-success waves-effect"
                                       download="PRUEBA TEORICA RP GRILLA DE CORRECCIOIN NIVEL II 2019.pdf.pdf"
                                       target="_blank" style="color: yellow">PRUEBA TEORICA RP GRILLA DE CORRECCIOIN NIVEL II 2019.</a>
                            @endif
                            @if($access->access == 'B')
                                    <a href="http://recreo.mikant.xyz/download/grilla/NIVEL%20I%20GRILLA%20DE%20CORRECCI%C3%93N%202019.pdf"
                                       type="button" class="btn btn-block btn-lg btn-success waves-effect"
                                       download="NIVEL I GRILLA DE CORRECCIÓN 2019.pdf" target="_blank" style="color: yellow">NIVEL I GRILLA DE CORRECCIÓN 2019</a>

                                    <a href="http://recreo.mikant.xyz/download/grilla/experimental_intercolegial_clave_correccion_def.pdf"
                                       type="button" class="btn btn-block btn-lg btn-success waves-effect"
                                       download="Dexperimental_intercolegial_clave_correccion_def.pdf" target="_blank" style="color: yellow">Dexperimental_intercolegial_clave_correccion_def</a>

                                    <a href="http://recreo.mikant.xyz/download/grilla/OM_hoja_%20de_respuestas-%20Clave_Correcci%C3%B3n.pdf" type="button"
                                       class="btn btn-block btn-lg btn-success waves-effect"
                                       download="OM_hoja_ de_respuestas- Clave_Corrección.pdf"
                                       target="_blank" style="color: yellow">OM_hoja_ de_respuestas- Clave_Corrección</a>

                                    <a href="http://recreo.mikant.xyz/download/grilla/PRUEBA%20TEORICA%20RP%20GRILLA%20DE%20CORRECCIOIN%20NIVEL%20II%202019.pdf"
                                       type="button"
                                       class="btn btn-block btn-lg btn-success waves-effect"
                                       download="PRUEBA TEORICA RP GRILLA DE CORRECCIOIN NIVEL II 2019.pdf.pdf"
                                       target="_blank" style="color: yellow">PRUEBA TEORICA RP GRILLA DE CORRECCIOIN NIVEL II 2019.</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row m-t-20 m-b--5 align-center">
                    <a href="{{ url('/') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection