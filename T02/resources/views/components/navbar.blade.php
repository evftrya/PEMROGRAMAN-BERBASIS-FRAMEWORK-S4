 <!-- ======= Mobile nav toggle button ======= -->
 <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="/assets/img/marvel aset.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="https://github.com/evtrya">Evi Fitriya</a></h1>
            <a href="https://pddikti.kemdikbud.go.id/data_mahasiswa/MjVFM0RCQTUtMjBGNi00NjhFLUE2OTItN0I2MjA3OEQ3MzAz">(1201222005)</a>

            <h1 class="text-light" id="tugas"><a href="https://telkomuniversityofficial-my.sharepoint.com/:f:/g/personal/evifitriya_student_telkomuniversity_ac_id/EgBa3eyzw_hDk0D6w0WF0zQBPd2JMvtuzDCAedYz2ZH-8A?e=hZ3F1s">---MODUL---</a></h1>
            <h1 class="text-light" id="tugas"><a href="https://telkomuniversityofficial-my.sharepoint.com/:u:/g/personal/evifitriya_student_telkomuniversity_ac_id/EV6-OcYIRZtHh255Y8HEXOcBz_HXo-o0mIJ3Bw_7Nrhi6w?e=ZDtTne">Tugas Pertemuan 2 PBF01</a></h1>
            <h1 class="text-light" id="tugas"><a href="https://telkomuniversityofficial-my.sharepoint.com/:u:/g/personal/evifitriya_student_telkomuniversity_ac_id/Ebb7s6-FVddOnoAmpnKEdtoBMfM6m4LWpO3zAXFJ13A_7w?e=4MfOwa">Tugas Pertemuan 3 PBF02</a></h1>
            <h1 class="text-light" id="tugas"><a href="https://telkomuniversityofficial-my.sharepoint.com/:u:/g/personal/evifitriya_student_telkomuniversity_ac_id/EXqxb58kDv5OlipJ0eAYJw4B-wd5GVcH9xfCgkEIy9ZpAQ?e=AdlaHU">Tugas Pertemuan 5 PBF03</a></h1>
            <h1 class="text-light" id="tugas"><a href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/evifitriya_student_telkomuniversity_ac_id/EcXWRMYcP7FNu02g6D7c_asBEZLF66LXC41FX_KPLFFDow?e=oLlRuw">---LAPORAN PRAKTIKUM---</a></h1>
            <div class="social-links mt-3 text-center">
            </div>
        </div>


        <nav id="navbar" class="nav-menu navbar">
            <ul>
            
            <!-- <li><a href="{{"/"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>All</span></a></li>
            <li><a href="{{"/im"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>My Second Father</span></a></li>
            <li><a href="{{"/t"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>My Third Father</span></a></li>
            <li><a href="{{"/ds"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>My Uncle</span></a></li> 
            <li><a href="{{"/Others"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Others</span></a></li>
         -->
            @foreach($navbar as $nav)
            <li><a href="{{$nav['link']}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>{{$nav['status']}}</span></a></li>
            @endforeach
            <li><a href="{{"/Others"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Others</span></a></li>
            <li><a href="{{"/new"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Insert New</span></a></li>
            
            </ul>
        </nav>
