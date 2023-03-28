function copyClipboard() {
    let copyText = document.getElementById("discord");

    copyText.select();

    navigator.clipboard.writeText(copyText.value);

    Swal.fire("Copied Text to Clipboard: " + copyText.value);
}

function realTime() {
    const BLOCKTIME = document.getElementById("block-time");
    setInterval(() => {
        const p = document.getElementById("time");
        let time = new Date().toLocaleTimeString();
        p.textContent = time;
        BLOCKTIME.innerHTML = "";
        BLOCKTIME.append(p);
    }, 1000);
}

// realTime();
