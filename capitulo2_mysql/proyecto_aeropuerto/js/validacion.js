function validar() {
    let cp = document.querySelector("input[name='cp']").value;

    let validos = [
        "CP10989","CP10988","CP109987",
        "CP10992","CP19993","CP20001"
    ];

    if (!validos.includes(cp)) {
        alert("Código postal no válido");
        return false;
    }

    return true;
}