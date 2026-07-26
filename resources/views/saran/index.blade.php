<x-layouts::app title="Kotak Saran">
    <div style="padding: 20px;">
        <h1>Kotak Saran </h1>
        <hr style="margin-bottom: 20px;">

        <!-- FORM INPUT SARAN -->
        <h2>Kirim Saran Kamu</h2>
        
        <form action="/saran" method="POST">
            @csrf
            <div style="margin-bottom: 10px;">
                <label>Nama:</label><br>
                <input type="text" name="nama_pengirim" required style="width: 100%; padding: 8px;">
            </div>
            
            <div style="margin-bottom: 10px;">
                <label>Isi Saran:</label><br>
                <textarea name="isi_saran" required style="width: 100%; padding: 8px;"></textarea>
            </div>
            
            <button type="submit" style="padding: 8px 16px; cursor: pointer;">Kirim</button>
        </form>

        <hr style="margin: 20px 0;">

        <!-- DAFTAR SARAN -->
        <h2>Daftar Saran Masuk</h2>
        <ul>
            @foreach($daftar_saran as $s)
                <li style="margin-bottom: 10px;">
                    <strong>{{ $s->nama_pengirim }}:</strong> {{ $s->isi_saran }}
                </li>
            @endforeach
        </ul>
    </div>
</x-layouts::app>