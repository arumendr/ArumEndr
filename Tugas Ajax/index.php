<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Live Search Mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery untuk fadeIn -->
  <style>
    #loading {
      display: none;
    }
  </style>
</head>

<body class="p-4">
  <div class="container">
    <h2 class="mb-4">Live Search Mahasiswa (AJAX + MySQL)</h2>
    <h5 class="mb-4">Arum Endri Mustikawati
      <span style="color: cornflowerblue;">A12.2023.07055</span>
    </h5>
    <input type="text" id="search" class="form-control mb-3" placeholder="Ketik nama, NIM, atau jurusan...">

    <!-- Spinner Bootstrap -->
    <div id="loading" class="text-center my-2">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
        </tr>
      </thead>
      <tbody id="result"></tbody>
    </table>
  </div>

  <script>
    const searchBox = document.getElementById("search");
    const result = document.getElementById("result");
    const loading = document.getElementById("loading");

    searchBox.addEventListener("keyup", function () {
      const keyword = searchBox.value.trim();
      if (keyword.length === 0) {
        result.innerHTML = "";
        return;
      }

      loading.style.display = "block";

      fetch("search.php?keyword=" + encodeURIComponent(keyword))
        .then(res => res.json())
        .then(data => {
          setTimeout(() => {
            loading.style.display = "none";
            result.innerHTML = "";

            if (data.length === 0) {
              result.innerHTML = "<tr><td colspan='3' class='text-center'>Data tidak ditemukan</td></tr>";
            } else {
              data.forEach(row => {
                const rowHtml = `<tr style="display: none">
                  <td>${row.nim}</td>
                  <td>${row.nama}</td>
                  <td>${row.jurusan}</td>
                </tr>`;
                result.insertAdjacentHTML('beforeend', rowHtml);
                $('#result tr:last-child').fadeIn(300);
              });
            }
          }, 200);
        });
    });
  </script>
</body>

</html>