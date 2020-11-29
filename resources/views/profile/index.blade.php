@extends('layouts.front')

@section('content')
    <div class="container">
      <div class="header">
          <h1>プロフィール一覧</h1>
      </div>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-8 mx-auto">
                    <div class="row">
                        <div class="text col-md-6">
                                  <div class="date">
                                   {{ $headline->updated_at->format('Y年m月d日') }}
                               </div>
                               <div class="name">
                                   {{ str_limit($headline->name, 50) }}
                               </div>
                               <div class="gender">
                                   {{ str_limit($headline->body, 10) }}
                               </div>
                               <div class="hobby">
                                   {{ str_limit($headline->hobby, 100) }}
                               </div>
                               <div class="introduction">
                                   {{ str_limit($headline->introduction, 1500) }}
                               </div>
                           </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                   <div class="post">
                       <div class="row">
                           <div class="text col-md-6">
                               <div class="date">
                                   {{ $post->updated_at->format('Y年m月d日') }}
                               </div>
                               <div class="name">
                                   {{ str_limit($post->name, 50) }}
                               </div>
                               <div class="gender">
                                   {{ str_limit($post->body, 10) }}
                               </div>
                               <div class="hobby">
                                   {{ str_limit($post->hobby, 100) }}
                               </div>
                               <div class="introduction">
                                   {{ str_limit($post->introduction, 1500) }}
                               </div>
                           </div>
                           
                       </div>
                   </div>
                   <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection