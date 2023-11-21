@extends('layouts.app')
@section('title', 'Hilda | Data Contacts')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Kotak Saran 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('contacts.update',$contact->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control" value="{{ $contact->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" name="email" class="form-control" value="{{ $contact->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Saran</label>
                                                <textarea name="pesan" class="form-control">{{ $contact->kotaksaran}}</textarea>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
@endsection