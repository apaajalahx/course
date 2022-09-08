<!DOCTYPE html>
<html>
<head>
    <title>Course</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Siapakah member paling banyak ambil course?</h5>
              <p class="card-text">{{ $member->name }} adalah orang dengan pengambilan course terbanyak dengan total : {{ $member->total }} Course</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Berapa banyak yang ambil course Golang?</h5>
              <p class="card-text">Saat Course bahasa program golang di ambil sebanyak {{ $golang->total }} kali</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Siapakah mentor paling banyak ambil course?</h5>
                <p class="card-text">{{ $mentor->name }} adalah orang dengan pengambilan course terbanyak dengan total : {{ $mentor->total }} Course</p>
              </div>
            </div>
          </div>
      </div>
      <br>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Member</th>
                <th>Course</th>
                <th>Mentor</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>

<script type="text/javascript">

  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('course.index') }}",
        columns: [
            {data: 'member', name: 'member.name'},
            {data: 'course', name: 'course.name'},
            {data: 'mentor', name: 'mentor.name' },
        ]
    });
  });
</script>
</html>