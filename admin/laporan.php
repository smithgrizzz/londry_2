<?php include 'header.php'; ?>

<div class="container">
    <div class="card bg-light mt-3 mb-3">
        <div class="card-heading p-4">
            <h4>Filter Laporan</h4>
        </div>
        <div class="card-body">

            <form action="laporan_cetak.php" method="get">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Dari Tanggal</th>
                        <th>Sampai tanggal</th>
                        <th width="1%"></th>
                    </tr>
                    <tr>
                        <td><input type="date" name="tgl_dari" class="form-control"></td>
                        <td><input type="date" name="tgl_sampai" class="form-control"></td>
                        <td><button type="submit" class="btn btn-warning text-white">Filter</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>