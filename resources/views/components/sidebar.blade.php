


<aside class="sidebar" style="background-image: url('{{ url('/halaman_depan/images/background.jpeg') }}')"></aside>
<div class="sidebar-logo">
        <img src="{{ url('/halaman_depan/images/icons/logo_reece.ico') }}" alt="Logo">
        
    </div>

   

<aside class="sidebar">

    <h3 style="margin-bottom:20px">Reece Farms</h3>
    

  
    @if(auth()->user()->role === 'admin')
        <ul class="menu">
            <li><a href="/admin/dashboard">Dashboard</a></li>
            <li><a href="/admin/penjualan">Penjualan</a></li>
            <li><a href="/admin/kelola-akun">Kelola Akun Pegawai</a></li>
            <li><a href="/admin/laporan">Laporan</a></li>
            <li><a href="/user/penanaman">Penanaman</a></li>
            <li><a href="/user/perawatan">Perawatan</a></li>
            <li><a href="/user/pemanenan">Pemanenan</a></li
        </ul>
    @endif

   
    @if(auth()->user()->role === 'user')
        <ul class="menu">
            <li><a href="/user/dashboard">Dashboard</a></li>
            <li><a href="/user/penanaman">Penanaman</a></li>
            <li><a href="/user/perawatan">Perawatan</a></li>
            <li><a href="/user/pemanenan">Pemanenan</a></li>
        </ul>
    @endif

    <form action="{{ route('logout') }}" method="POST" style="margin-top:30px">
        @csrf
       <div class="logout">
        <button>Keluar</button>
    </div>
    </form>
</aside>
