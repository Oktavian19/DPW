function validasi() {
    const nama = document.getElementById('nama').value;
    const alamat = document.getElementById('alamat').value;
    const TTL = document.getElementById('TTL').value;
    const jk = document.querySelector('input[name="jk"]:checked');
    const hobi = document.querySelector('input[name="hobi"]:checked');
    const kerja = document.querySelector('input[name="kerja"]:checked');
    const setuju = document.getElementById('setuju').checked;

    if (!nama || !alamat || !TTL || !jk || !hobi || !kerja || !setuju) {
        alert("Formulir belum lengkap");
    } else {
        alert("Formulir lengkap!");
    }
}