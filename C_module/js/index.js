const moveleft = $(".moveleft");
const moveright = $(".moveright");
const noticebody = $(".overfolow");

let type = "all";
let order = "desc";
let page = 0;
let len = 0;

// Initial load
fetchNotices();

function fetchNotices() {
    fetch(`getNotice.php?type=${type}&order=${order}`)
        .then(res => res.json())
        .then(data => gen(data));
}

function gen(data) {
    page = 0;
    $(".page").textContent = page + 1;
    noticebody.style.transform = `translateX(0px)`;
    
    noticebody.innerHTML = data.map(item => `
        <div class="notice">
            <p>${item.type}</p>
            <p>${item.title}</p>
            <p>${item.date}</p>
        </div>
    `).join('');

    len = data.length === 18 ? 2 : Math.floor(data.length / 6);
}

function nomal() {
    type = "일반";
    fetchNotices();
}

function even() {
    type = "이벤트";
    fetchNotices();
}

function desc() {
    order = "desc";
    fetchNotices();
}

function asc() {
    order = "asc";
    fetchNotices();
}

function Funmoveleft() {
    if (page <= 0) return;
    page--;
    updatePage();
}

function FunmoveRight() {
    if (page >= len) return;
    page++;
    updatePage();
}

function updatePage() {
    $(".page").textContent = page + 1;
    noticebody.style.transform = `translateX(-${1400 * page}px)`;
}