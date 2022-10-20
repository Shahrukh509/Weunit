<div>
    <div class="row">
        <div class="col-lg-4 col-xl-6 pe-0 left-side-h-0 margin-left-right-col" id="designTabFix">
            <div class="padding-50 left-side-h left-side-h-0 left-side-home text-center">
                <div style="margin-top: 6rem!important" class="text-center">
                    <div class="profile-img1 py-2 m-auto">
                        <!--@if (!empty(Auth::user()->profile_image) && file_exists(storage_path('/app/public/') . Auth::user()->profile_image))-->
                        <!--    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}"-->
                        <!--        style="width:100%; margin-left: 2px; height:90px;" class="img-fluid rounded-circle">-->
                        <!--@else-->
                        <!--    <img src="{{ asset('assets/images/avatar.jpg') }}" style="width:100%; margin-left: 2px;"-->
                        <!--        class="img-fluid rounded-circle">-->
                        <!--@endif-->
                        
                        
                         {{-------- update by kamal bd ----------}}
                       <img class="rounded-circle header-profile-user" src="{{ asset(!empty(Auth::user()->profile_image)? url('public/upload/adminimg/'.Auth::user()->profile_image) : url('public/upload/noimg.png')) }}"
                            alt="img" style="width: 100px;height:100px">
                            
                            
                    </div>
                    <div class="ms-2 py-3 lh-1">
                        <h3 class="home-head1" style="">{{ Auth::user()->firstname . ' ' . Auth::user()->surname }}
                        </h3>
                        <!-- <span class="home-head1-title">Super Admin</span> -->
                    </div>
                </div>
                <hr class="hr-1">
                <div>
                    <p id="homeStat" class="text-start" style="padding: 1rem 0 0 0; margin-bottom:0;">Statistics</p>
                    <div class="pt-4">
                        <label for="barChart" class="text-white">Visitors By Platform</label>
                        <canvas id="barChart" class="mx-2" height="350px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        @php

        $design = \App\Models\Design::where('user_id',Auth()->user()->id)->first();
        @endphp
        @if(!empty($design->theme))

        <div class="col-lg-5 col-xxl-4" id="designTabFix1" style="padding:0;">
             <div class="left-side-h remove-margin hi-bye" style="height:550px;margin-top: 220px; border-left: 1px solid grey;">
                <div class="d-flex justify-content-between">
            <a class="share-profile-btn" target="_blank" href="{{ route('share-profile', ['userID' => Auth::user()->id, 'themeID' => $theme]) }}">Click To Share Profile</a>
            <!--<div class="text-end">-->
            <!--    <span><i class="fas fa-mobile-alt fs-3"></i></span>&nbsp;&nbsp;&nbsp;-->
            <!--    <span class="ms-2"><i class="fas fa-laptop fs-3"></i></span>-->

            <!-- </div>-->
        </div>
        <div class="mt-3">
        @include('themes.'.$design->theme);
    </div>
</div>
</div>

        @else
        <livewire:widget.preview-component :theme="$theme" />
        @endif()
    </div>
</div>

@push('scripts')
    <script>
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Visitors x Time',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        const barChart = new Chart(
            document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: ['Facebook', 'Instagram', 'Pinterest', 'WhatsApp', 'Twitch'],
                    datasets: [{
                        label: '',
                        data: [1000, 200, 650, 500, 400, 500],
                        backgroundColor: [
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb'
                        ],
                        borderColor: [
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb',
                            '#07f5cb'
                        ],
                        borderWidth: 1,
                        borderRadius: 5,
                        borderSkipped: false,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'grey'
                            },
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                boxWidth: 0
                            }
                        }
                    }
                },
                plugins: [custom_canvas_background_color]

            }
        );
    </script>
@endpush
