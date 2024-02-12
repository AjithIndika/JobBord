@include('livewire.template.head')

  <!-- End Header -->
@include('livewire.template.headnav')
  <!-- ======= Sidebar ======= -->
  @include('livewire.template.side-nave')

    <div class="pagetitle">
      <h1>{{ $title ?? ''}}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">{{ config('app.name','Laravel')}}</a></li>
          <li class="breadcrumb-item active">{{ $title ?? ''}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    {{$slot}}

  </main><!-- End #main -->
@include('livewire.template.footer')
