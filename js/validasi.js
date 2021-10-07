function validasi(){
  username = document.getElementById('username');
  password = document.getElementById('password');
  console.log(username);
  console.log(password);
  if(username.value == '' && password.value ==''){
    alert('Username dan Password Tidak boleh kosong');
    username.focus();
    return false;
  }else if(username.value == ''){
    alert('Username tidak boleh kosong');
    username.focus();
    return false;
  }else if(password.value == ''){
    alert('Password tidak boleh kosong');
    password.focus();
    return false;
  }else{
    return true;
  }
}

function validasiPejabat(){
  nip = document.getElementById('nip');
  nama = document.getElementById('nama');
  jabatan = document.getElementById('jabatan');
  kontak = document.getElementById('kontak');
  alamat = document.getElementById('alamat');
/*
 if(nip.value == '' && nama.value == '' && jabatan.value == '' && kontak.value == '' && alamat.value == ''){
    alert('semua Fields tidak boleh kosong');
    nip.focus();
    return false;
  }else if(nip.value == ''){
    alert('NIP tidak boleh kosong');
    nip.focus();
    return false;
  }else if(nama.value == ''){
    alert('NAMA tidak boleh kosong');
    nama.focus();
    return false;
  }else if(jabatan.value == ''){
    alert('JABATAN tidak boleh kosong');
    jabatan.focus();
    return false;
  }else if(kontak.value == ''){
    alert('KONTAK tidak boleh kosong');
    kontak.focus();
    return false;
  }else if(alamat.value == ''){
    alert('ALAMAT tidak boleh kosong');
    alamat.focus();
    return false;
  }else{
    alert('Terima Kasih')
    return true;
  }*/
  foc = false;
  flag = true;
  msg = "";
  if(nip.value == ''){
    msg += "NIP Tidak Boleh Kosong \n";
    if(foc == false){
      nip.focus();
      foc = true;
    }
    flag = false;
  }
  if(nama.value == ''){
    msg += "Nama Tidak Boleh Kosong \n";
    if(foc == false){
      nama.focus();
      foc = true;
    }
    flag = false;
  }
  if(jabatan.value == ''){
    msg += "Jabatan Tidak Boleh Kosong \n";
    if(foc == false){
      jabatan.focus();
      foc = true;
    }
    flag = false;
  }
  if(kontak.value == ''){
    msg += "Kontak Tidak Boleh Kosong \n";
    if(foc == false){
      kontak.focus();
      foc = true;
    }
    flag = false;
  }
  if(alamat.value == ''){
    msg += "Alamat Tidak Boleh Kosong \n";
    if(foc == false){
      alamat.focus();
      foc = true;
    }
    flag = false;
  }
  if(flag){
    alert('Terima Kasih');
  }else{
    alert(msg);
    return flag;
  }
}

function validasiGuru(){
  nip = document.getElementById('nip');
  nama = document.getElementById('nama');
  alamat = document.getElementById('alamat');
  jenis_kelamin = document.getElementById('jenis_kelamin');
  status1 = document.getElementById('status');
  jabatan = document.getElementById('jabatan');

  foc = false;
  flag = true;
  msg = "";
  if(nip.value == ''){
    msg += "NIP Tidak Boleh Kosong \n";
    if(foc == false){
      nip.focus();
      foc = true;
    }
    flag = false;
  }
  if(nama.value == ''){
    msg += "Nama Tidak Boleh Kosong \n";
    if(foc == false){
      nama.focus();
      foc = true;
    }
    flag = false;
  }
  if(alamat.value == ''){
    msg += "Alamat Tidak Boleh Kosong \n";
    if(foc == false){
      alamat.focus();
      foc = true;
    }
    flag = false;
  }
  if(jenis_kelamin.value == ''){
    msg += "Jenis Kelamin Tidak Boleh Kosong \n";
    if(foc == false){
      jenis_kelamin.focus();
      foc = true;
    }
    flag = false;
  }
  if(status1.value == ''){
    msg += "Status Tidak Boleh Kosong \n";
    if(foc == false){
      status1.focus();
      foc = true;
    }
    flag = false;
  }
  if(jabatan.value == ''){
    msg += "Jabatan Tidak Boleh Kosong \n";
    if(foc == false){
      jabatan.focus();
      foc = true;
    }
    flag = false;
  }
  if(flag){
    alert('Terima Kasih');
  }else{
    alert(msg);
    return flag;
  }
}

function validasiMurid(){
  nama = document.getElementById('nama');
  alamat = document.getElementById('alamat');
  kelas = document.getElementById('kelas');
  jurusan = document.getElementById('jurusan');

  foc = false;
  flag = true;
  msg = "";
  if(nama.value == ''){
    msg += "Nama Tidak Boleh Kosong \n";
    if(foc == false){
      nama.focus();
      foc = true;
    }
    flag = false;
  }
  if(alamat.value == ''){
    msg += "Alamat Tidak Boleh Kosong \n";
    if(foc == false){
      alamat.focus();
      foc = true;
    }
    flag = false;
  }
  if(kelas.value == ''){
    msg += "Kelas Tidak Boleh Kosong \n";
    if(foc == false){
      kelas.focus();
      foc = true;
    }
    flag = false;
  }
  if(jurusan.value == ''){
    msg += "Jurusan Tidak Boleh Kosong \n";
    if(foc == false){
      jurusan.focus();
      foc = true;
    }
    flag = false;
  }
  if(flag){
    alert('Terima Kasih');
  }else{
    alert(msg);
    return flag;
  }
}


function validasiProfile(){
  id = document.getElementById('id');
  username = document.getElementById('username');
  password = document.getElementById('password');
  level = document.getElementById('level');

  foc = false;
  flag = true;
  msg = "";
  if(id.value == ''){
    msg += "User Id Tidak Boleh Kosong \n";
    if(foc == false){
      id.focus();
      foc = true;
    }
    flag = false;
  }
  if(username.value == ''){
    msg += "Username Tidak Boleh Kosong \n";
    if(foc == false){
      username.focus();
      foc = true;
    }
    flag = false;
  }
  if(level.value == ''){
    msg += "Level Tidak Boleh Kosong \n";
    if(foc == false){
      level.focus();
      foc = true;
    }
    flag = false;
  }
  if(password.value == ''){
    msg += "Password Tidak Boleh Kosong \n";
    if(foc == false){
      password.focus();
      foc = true;
    }
    flag = false;
  }
  if(flag){
    alert('Terima Kasih');
  }else{
    alert(msg);
    return flag;
  }
}