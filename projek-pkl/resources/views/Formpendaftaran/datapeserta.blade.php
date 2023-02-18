@extends('layout')


@section('isi')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 mt-5 ps-5 pe-5">
            {{-- <div class="card mt-3"> --}}
                {{-- <div class="card-body"> --}}
                    <h1 class="text-center pb-4 ">Data Peserta Prakerin</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      {{ $message }}
                    </div>  
                    @endif

                    {{-- <a href="/create-agenda" class="btn btn-success mb-4">Tambah</a> --}}

                    {{-- table --}}
                    
                    <table class="table">
                      <thead  class="">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">TTGL</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat Rumah</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Alamat Sekolah</th>
                            <th scope="col">No Fax</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Periode</th>
                            <th scope="col">PAS Foto</th>
                            <th scope="col">KTP/Kartu Pelajar</th>
                            <th scope="col">CV</th>
                            <th scope="col">Surat Pengantar</th>
                            <th scope="col">Option</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPeserta as $item)
                    
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->tgl }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>{{ $item->alamat_rmh }}</td>
                            <td>{{ $item->notelp }}</td>
                            <td>{{ $item->alamat_skl }}</td>
                            <td>{{ $item->nofax }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->periode }}</td>
                            <td>
                              <img src="{{asset('foto/'.$item->foto)}}" alt="" style="width: 100px">
                            </td>

                            <td>
                              <img src="{{asset('kartu/'.$item->kartu)}}" alt="" style="width: 100px">
                            </td>

                            <td>
                              <img src="{{asset('cv/'.$item->cv)}}" alt="" style="width: 100px">
                            </td>

                            <td>
                              <img src="{{asset('surat/'.$item->surat)}}" alt="" style="width: 100px">
                            </td>

                            {{-- <td>
                                <a href="{{ url('edit-agenda',$item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('delete-agenda', $item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td> --}}
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

                    {{-- <table class="table">
                        <thead>
                         
                        </tbody>
                      </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection