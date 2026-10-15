const categoryCards=document.querySelectorAll('.category-card');
const dashboardTitle=document.getElementById('dashboard-title');
const sidebarHeader=document.getElementById('sidebar-header');
const sidebarList=document.getElementById('sidebar-list');
const mapTitle=document.getElementById('map-title');
const levelwil=document.getElementById('levelwil');
const indikator=document.getElementById('indicator');
const mainValue=document.getElementById('main-value');
const mainLabel=document.getElementById('main-label');
const statusValue=document.getElementById('status-value');
const dataTahun=document.getElementById('data-tahun');

let categoryData = {};

async function loadDataIndikator() {
    try {
        const response = await fetch('apis/data_indikator.php');
        if (!response.ok) {
            throw new Error('Gagal mengambil data dashboard');
        }
        categoryData = await response.json();
        updateDataIndikator('kesehatan');

    } catch (error) {
        console.error(error);
    }
}

function updateDataIndikator(page){
    const data=categoryData[page];
    if(!data)return;
    dashboardTitle.textContent=data.title;
    sidebarHeader.innerHTML=data.sidebar;
    mapTitle.textContent=data.map;
    levelwil.textContent=data.levelwil;
    indikator.textContent=data.indikator;
    mainValue.textContent=data.value;
    dataTahun.textContent=data.datatahun;
    sidebarList.innerHTML=data.indicators.map((item,index)=>`<li class="${index===0?'active':''}">${item}</li>`).join('');
    bindSidebar();
}

function bindSidebar(){
    document.querySelectorAll('#sidebar-list li').forEach(item=>{
        item.addEventListener('click',()=>{
            document.querySelectorAll('#sidebar-list li').forEach(li=>li.classList.remove('active'));
            item.classList.add('active');
        });
    });
}

loadDataIndikator()

categoryCards.forEach(card=>{
    card.addEventListener('click',()=>{
        categoryCards.forEach(item=>item.classList.remove('active'));
        card.classList.add('active');
        updateDataIndikator(card.dataset.page);
        document.querySelector('.dashboard').scrollIntoView({behavior:'smooth',block:'start'});
    });
});

bindSidebar();

document.querySelectorAll('.dropdown-toggle').forEach(button=>{
    button.addEventListener('click',e=>{
        e.stopPropagation();
        const dropdown=button.parentElement;

        document.querySelectorAll('.dropdown').forEach(item=>{
            if(item!==dropdown)item.classList.remove('open');
        });

        dropdown.classList.toggle('open');
    });
});

document.addEventListener('click',()=>{
    document.querySelectorAll('.dropdown').forEach(dropdown=>{
        dropdown.classList.remove('open');
    });
});