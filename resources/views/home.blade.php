@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Saint Lague Calculator</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <div class="form-group">
                        @csrf
                        @method('POST')
                        <label for="">Partai Kebangkitan Bangsa - PKB</label>
                        <input type="text" name="pkb" id="pkb" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PKB</small>
                        <hr>
                        <br>

                        <label for="">Partai Gerakan Indonesia Raya - Gerindra</label>
                        <input type="text" name="gerindra" id="gerindra" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for Gerindra</small>
                        <hr>
                        <br>

                        <label for="">Partai Demokrasi Indonesia Perjuangan  - PDIP</label>
                        <input type="text" name="pdip" id="pdip" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PDIP</small>
                        <hr>
                        <br>

                        <label for="">Partai Golongan Karya - GOLKAR</label>
                        <input type="text" name="golkar" id="golkar" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for GOLKAR</small>
                        <hr>
                        <br>

                        <label for="">Partai Nasional Demokrat (NASDEM)</label>
                        <input type="text" name="nasdem" id="nasdem" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for Nasdem</small>
                        <hr>
                        <br>

                        <label for="">Partai Gerakan Perubahan Indonesia (GARUDA) </label>
                        <input type="text" name="garuda" id="garuda" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for GARUDA</small>                      
                        <hr>
                        <br>

                        <label for="">Partai Berkarya</label>
                        <input type="text" name="berkarya" id="berkarya" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for Partai Berkarya</small>
                        <hr>
                        <br>


                        <label for="">Partai Keadilan Sejahtera (PKS)</label>
                        <input type="text" name="pks" id="pks" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PKS</small>
                        <hr>
                        <br>

                        <label for="">Partai Persatuan Indonesia (PERINDO)</label>
                        <input type="text" name="perindo" id="perindo" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PERINDO</small>
                        <hr>
                        <br>

                        <label for="">Partai Persatuan Pembangunan (PPP)</label>
                        <input type="text" name="ppp" id="ppp" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PPP</small>
                        <hr>
                        <br>

                        <label for="">Partai Solidaritas Indonesia (PSI)</label>
                        <input type="text" name="psi" id="psi" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PSI</small>
                        <hr>
                        <br>

                        <label for="">Partai Amanat Nasional (PAN)</label>
                        <input type="text" name="pan" id="pan" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PAN</small>
                        <hr>
                        <br>

                        <label for="">Partai Hati Nurani Rakyat (HANURA)</label>
                        <input type="text" name="hanura" id="hanura" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for HANURA</small>
                        <hr>
                        <br>

                        <label for="">Partai Demokrat</label>
                        <input type="text" name="demokrat" id="demokrat" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for Partai Demokrat</small>
                        <hr>
                        <br>

                        <label for="">Partai Bulan Bintang (PBB)</label>
                        <input type="text" name="pbb" id="pbb" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PBB</small>
                        <hr>
                        <br>

                        <label for="">Partai Keadilan dan Persatuan Indonesia (PKPI)</label>
                        <input type="text" name="pkpi" id="pkpi" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Input Vote for PKPI</small>
                        <hr>
                        <br>

                        <form action="/vote" method="POST">
                            <button type="submit"  class="btn btn-primary">Hitung Kursi</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
