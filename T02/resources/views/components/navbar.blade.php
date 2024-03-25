 <!-- ======= Mobile nav toggle button ======= -->
 <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="/assets/img/marvel aset.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="https://github.com/conybrow">Evi Fitriya</a></h1>
            <a href="https://pddikti.kemdikbud.go.id/data_mahasiswa/MjVFM0RCQTUtMjBGNi00NjhFLUE2OTItN0I2MjA3OEQ3MzAz">(1201222005)</a>


            <h1 class="text-light" id="tugas"><a href="https://telkomuniversityofficial-my.sharepoint.com/:b:/g/personal/evifitriya_student_telkomuniversity_ac_id/ERMOJREKyjFGqCKTZFP66L8Bvysvhb9zS75f2U-mUqJeAw?e=39MUUN">Tugas Pemrograman Framework 02</a></h1>
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
            
            </ul>
        </nav>
