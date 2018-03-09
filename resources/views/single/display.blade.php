@extends ('master')

@section('content')

<section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ $single->name }}
                </h1>
                <h2 class="subtitle">
                        {{ $single->organization }}
                </h2>
            </div>
        </div>
</section>

<section class="section">

    <div class="container">
    
        <h1 class="title">Basic Information</h1>
        <div class="content box">
    
            <div class="columns">
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-user"></i> Name</h5>
                    <p>{{ $single->name }}</p>
                </div>
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-building"></i> Organization</h5>
                    <p>{{ $single->organization }}</p>
                </div>
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-envelope"></i> Email</h5>
                    <a href="mailto:{{ $single->email }}">{{ $single->email }}</a>
                </div>
                <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-phone"></i> Phone Number</h5>
                        <p>{{ $single->phone_number }}</p>
                </div>
            </div>

            <div class="columns">
                    <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-globe"></i> Url</h5>
                        <a href="{{ $single->url }}">{{ $single->url }}</a>
                    </div>
                    <div class="column is-three-quarters">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-sticky-note"></i> Company Description</h5>
                        <p>{{ $single->company_description }}</p>
                    </div>
                </div>
    
        </div>

        <hr>

        <h1 class="title">Design</h1>
        <div class="content box">
    
            <div class="columns">
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-paint-brush"></i> Redesign Logo</h5>
                    <p>{{ $single->redesign_logo }}</p>
                </div>
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-tint"></i> Theme References</h5>
                    <p>{{ $single->design_theme }}</p>
                </div>
            
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-eye-dropper"></i> Design Colors</h5>
                    <p>{{ $single->design_colors }}</p>
                </div>
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-object-group"></i> Look and Feel</h5>
                    <p>{{ $single->design_lookandfeel }}</p>
                </div>
            </div>

                <hr>

                <h4 class="subtitle">Name a few sites that appeal to you, either competitors or sites unrelated to your industry that you feel may be relevant to the design of your site. Please comment on what you like/dislike about the design and features of these sites.</h4>

                @php

                    $refs = json_decode($single->design_ref);

                @endphp

                @foreach ($refs as $item)

                <div class="columns">

                       @foreach ($item as $key => $val)

                            @if($val == null )
                            
                                @php continue; @endphp

                            @endif

                            @if ($key == 0)

                            <div class="column">

                                <h5 class="has-text-weight-semibold">Company</h5>

                                <p>{{ $val }}</p>
                            </div>

                            @elseif ($key == 1)

                            <div class="column">

                                <h5 class="has-text-weight-semibold">URL</h5>

                                <p>{{ $val }}</p>
                            </div>

                            @else

                            <div class="column is-half">

                                <h5 class="has-text-weight-semibold">Comments</h5>

                                <p>{{ $val }}</p>
                            </div>

                            @endif
                           
                       @endforeach         

                </div>
                        
                @endforeach
    
        </div>

        <hr>

        <h1 class="title">Brand/Target Audience</h1>
        <div class="content box">
        
            @php $target = json_decode($single->target_audience_info); @endphp
        
            <div class="columns">
        
                <div class="column">
                    <h5 class="has-text-weight-semibold">List any important words that you want people to associate with your company image/brand:</h5>
                    <p>{{ $target->keywords }}</p>
                </div>
        
            </div>
        
            <div class="columns">
                <div class="column">
                    <h5 class="has-text-weight-semibold">Target Audience: Describe what kind of users you intend to attract to your site:
                    </h5>
                    <p>{{ $target->target }}</p>
                </div>
        
            </div>
        
            <div class="columns">
        
                <div class="column">
                    <h5 class="has-text-weight-semibold">Where/how do people learn about your company/product/service(s)?</h5>
                    <p>{{ $target->learn }}</p>
                </div>
        
            </div>
        
            <div class="columns">
                <div class="column">
                    <h5 class="has-text-weight-semibold">Why does your target audience need this website?</h5>
                    <p>{{ $target->why }}</p>
                </div>
        
            </div>
        
        </div>

        <hr>

        <h1 class="title">Content/Special Features</h1>
        <div class="content box">
        
            @php 

                $features = json_decode($single->feature);
                
            @endphp
        
            <div class="columns">
        
                <div class="column">
                    <h5 class="has-text-weight-semibold"><i class="fas fa-fire"></i> Basic</h5>

                    <p>

                        @php 
                            
                            $len = count($features->basic); 
                            $i = 0;
                            
                        @endphp
                        
                        @foreach ($features->basic as $item)

                            @if ($i == $len - 1)

                            {{ $item }}

                            @else

                            {{ $item }},

                            @endif

                            @php $i++; @endphp
                            
                        @endforeach
                    
                    </p>
                </div>
        
            </div>

            <div class="columns">
        
                    <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-magic"></i> Special</h5>
    
                        <p>
    
                            @php 
                                
                                $len = count($features->special); 
                                $i = 0;
                                
                                @endphp
                            
                            @foreach ($features->special as $item)
    
                                @if ($i == $len - 1)
    
                                {{ $item }}
    
                                @else
    
                                {{ $item }},
    
                                @endif
    
                                @php $i++; @endphp
                                
                            @endforeach
                        
                        </p>
                    </div>
            
            </div>

                <div class="columns">
        
                        <div class="column">
                            <h5 class="has-text-weight-semibold"><i class="fas fa-anchor"></i> Others</h5>
        
                            <p>
        
                                @php 
                                    
                                    $len = count($features->other); 
                                    $i = 0;
                                    
                                @endphp
                                
                                @foreach ($features->other as $item)
        
                                    @if ($i == $len - 1)
        
                                    {{ $item }}
        
                                    @else
        
                                    {{ $item }},
        
                                    @endif
        
                                    @php $i++; @endphp
                                    
                                @endforeach
                            
                            </p>
                        </div>
                
                </div>

                <div class="columns">
                    <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-calendar-alt"></i> Completion Date</h5>
                        <p>{{ $features->completion_date }}</p>
                    </div>
                    <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-clock"></i> Updated Regularly</h5>
                        <p>{{ $features->updated_regularly }}</p>
                    </div>
                    <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-puzzle-piece"></i> Responsibility</h5>
                        <p>{{ $features->responsible_update }}</p>
                    </div>
                </div>

                <div class="columns">
                    <div class="column">
                        <h5 class="has-text-weight-semibold"><i class="fas fa-snowflake"></i> Additional Comments</h5>
                        <p>{{ $features->additional_comments }}</p>
                    </div>
                </div>
    
        
        </div>
    
    </div>

</section>
    
@endsection