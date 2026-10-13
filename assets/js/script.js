const categoryCards=document.querySelectorAll('.category-card');
const dashboardTitle=document.getElementById('dashboard-title');
const sidebarHeader=document.getElementById('sidebar-header');
const sidebarList=document.getElementById('sidebar-list');
const mapTitle=document.getElementById('map-title');
const regionName=document.getElementById('region-name');
const population=document.getElementById('population');
const facility=document.getElementById('facility');
const indicatorValue=document.getElementById('indicator-value');
const mainValue=document.getElementById('main-value');
const mainLabel=document.getElementById('main-label');
const statusValue=document.getElementById('status-value');

const categoryData={
    kesehatan:{
        title:'PROFIL KESEHATAN KABUPATEN TASIKMALAYA',
        sidebar:'PROFIL KESEHATAN',
        map:'PETA INDIKATOR KESEHATAN',
        region:'Singaparna',
        population:'29.602 jiwa',
        facility:'1 unit',
        value:'87,4%',
        label:'Cakupan Imunisasi Lengkap',
        status:'Sedang',
        chart:'Tren Cakupan Imunisasi Lengkap (%)',
        indicators:['Ringkasan','Kesehatan Ibu & Anak','Penyakit Menular','Penyakit Tidak Menular','Kesehatan Lingkungan','Fasilitas & SDM Kesehatan','Jaminan Kesehatan']
    },
    pendidikan:{
        title:'PROFIL PENDIDIKAN KABUPATEN TASIKMALAYA',
        sidebar:'PROFIL PENDIDIKAN',
        map:'PETA INDIKATOR PENDIDIKAN',
        region:'Singaparna',
        population:'29.602 jiwa',
        facility:'32 sekolah',
        value:'91,2%',
        label:'Angka Partisipasi Sekolah',
        status:'Baik',
        chart:'Tren Angka Partisipasi Sekolah (%)',
        indicators:['Ringkasan','Pendidikan Dasar','Pendidikan Menengah','Angka Partisipasi','Angka Putus Sekolah','Tenaga Pendidikan','Sarana Pendidikan','HLS','RLS']
    },
    kemiskinan:{
        title:'PROFIL KEMISKINAN KABUPATEN TASIKMALAYA',
        sidebar:'KEMISKINAN',
        map:'PETA INDIKATOR KEMISKINAN',
        region:'Singaparna',
        population:'29.602 jiwa',
        facility:'8.421 KK',
        value:'8,7%',
        label:'Persentase Penduduk Miskin',
        status:'Sedang',
        chart:'Tren Persentase Penduduk Miskin (%)',
        indicators:['Ringkasan','Kemiskinan','Penduduk Miskin','P3KE','Bantuan Sosial','Kondisi Rumah Tangga','Ketenagakerjaan']
    },
    gender:{
        title:'PROFIL GENDER KABUPATEN TASIKMALAYA',
        sidebar:'GENDER',
        map:'PETA INDIKATOR GENDER',
        region:'Singaparna',
        population:'29.602 jiwa',
        facility:'—',
        value:'89,6',
        label:'Indeks Pembangunan Gender',
        status:'Baik',
        chart:'Tren Indeks Pembangunan Gender',
        indicators:['Ringkasan','Indeks Pembangunan Gender','Indeks Pemberdayaan Gender','Perlindungan Perempuan']
    },
    stunting:{
        title:'PROFIL STUNTING KABUPATEN TASIKMALAYA',
        sidebar:'STUNTING',
        map:'PETA INDIKATOR STUNTING',
        region:'Singaparna',
        population:'29.602 jiwa',
        facility:'52 Posyandu',
        value:'12,4%',
        label:'Prevalensi Stunting',
        status:'Rendah',
        chart:'Tren Prevalensi Stunting (%)',
        indicators:['Ringkasan','Prevalensi Stunting','Balita','Kesehatan Ibu','Intervensi Spesifik','Intervensi Sensitif']
    },
    idm:{
        title:'INDEKS DESA MEMBANGUN KABUPATEN TASIKMALAYA',
        sidebar:'IDM',
        map:'PETA INDEKS DESA MEMBANGUN',
        region:'Singaparna',
        population:'29.602 jiwa',
        facility:'—',
        value:'0,76',
        label:'Indeks Desa Membangun',
        status:'Maju',
        chart:'Tren Indeks Desa Membangun',
        indicators:['Ringkasan','Indeks Desa Membangun','Indeks Ketahanan Sosial','Indeks Ketahanan Ekonomi','Indeks Ketahanan Lingkungan','Status Desa']
    }
};

function updateDashboard(page){
    const data=categoryData[page];
    if(!data)return;
    dashboardTitle.textContent=data.title;
    sidebarHeader.innerHTML=data.sidebar;
    mapTitle.textContent=data.map;
    regionName.textContent=data.region;
    population.textContent=data.population;
    facility.textContent=data.facility;
    indicatorValue.textContent=data.value;
    mainValue.textContent=data.value;
    mainLabel.textContent=data.label;
    statusValue.textContent=data.status;
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

categoryCards.forEach(card=>{
    card.addEventListener('click',()=>{
        categoryCards.forEach(item=>item.classList.remove('active'));
        card.classList.add('active');
        updateDashboard(card.dataset.page);
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