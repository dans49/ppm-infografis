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

const categoryData={
    kesehatan:{
        title:'PROFIL KESEHATAN KABUPATEN TASIKMALAYA',
        sidebar:'PROFIL KESEHATAN',
        map:'PETA INDIKATOR KESEHATAN',
        levelwil:'Kabupaten',
        indikator:'Angka Harapan Hidup',
        value: '70 Tahun',
        chart:'Tren Cakupan Imunisasi Lengkap (%)',
        indicators:['Ringkasan','Kesehatan Ibu & Anak','Penyakit Menular','Penyakit Tidak Menular','Kesehatan Lingkungan','Fasilitas & SDM Kesehatan','Jaminan Kesehatan']
    },
    pendidikan:{
        title:'PROFIL PENDIDIKAN KABUPATEN TASIKMALAYA',
        sidebar:'PROFIL PENDIDIKAN',
        map:'PETA INDIKATOR PENDIDIKAN',
        levelwil:'Kabupaten',
        indikator:'Harapan Lama Sekolah',
        value: '80%',
        chart:'Tren Angka Partisipasi Sekolah (%)',
        indicators:['Ringkasan','Pendidikan Dasar','Pendidikan Menengah','Angka Partisipasi','Angka Putus Sekolah','Tenaga Pendidikan','Sarana Pendidikan','HLS','RLS']
    },
    kemiskinan:{
        title:'PROFIL KEMISKINAN KABUPATEN TASIKMALAYA',
        sidebar:'KEMISKINAN',
        map:'PETA INDIKATOR KEMISKINAN',
        levelwil:'Kabupaten',
        indikator:'Persentase Kemiskinan',
        value: '10,15%',
        chart:'Tren Persentase Penduduk Miskin (%)',
        indicators:['Ringkasan','Kemiskinan','Penduduk Miskin','P3KE','Bantuan Sosial','Kondisi Rumah Tangga','Ketenagakerjaan']
    },
    gender:{
        title:'PROFIL GENDER KABUPATEN TASIKMALAYA',
        sidebar:'GENDER',
        map:'PETA INDIKATOR GENDER',
        levelwil:'Kabupaten',
        indikator:'Angka Harapan Hidup',
        value: '90%',
        chart:'Tren Indeks Pembangunan Gender',
        indicators:['Ringkasan','Indeks Pembangunan Gender','Indeks Pemberdayaan Gender','Perlindungan Perempuan']
    },
    stunting:{
        title:'PROFIL STUNTING KABUPATEN TASIKMALAYA',
        sidebar:'STUNTING',
        map:'PETA INDIKATOR STUNTING',
        levelwil:'Kabupaten',
        indikator:'Prevalensi Stunting',
        value: '17,1%',
        chart:'Tren Prevalensi Stunting (%)',
        indicators:['Ringkasan','Prevalensi Stunting','Balita','Kesehatan Ibu','Intervensi Spesifik','Intervensi Sensitif']
    },
    idm:{
        title:'INDEKS DESA MEMBANGUN KABUPATEN TASIKMALAYA',
        sidebar:'IDM',
        map:'PETA INDEKS DESA MEMBANGUN',
        levelwil:'Kabupaten',
        indikator:'Angka Harapan Hidup',
        value: '90%',
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
    levelwil.textContent=data.levelwil;
    indikator.textContent=data.indikator;
    mainValue.textContent=data.value;
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