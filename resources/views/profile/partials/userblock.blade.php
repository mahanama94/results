<div class="media">
    <a class="pull-left" href= "{{ route('profile.index' , ['indexNumber' => $user->getIndexNumber()]) }}">
        <img class="media-object" alt="{{ $user->getIndexNumber() }}" src="{{ $user->getAvatar() }}">
    </a>

    <div class="media-body">
        <h4 class="media-heading">
            <a href="{{ route('profile.index' , ['username' => $user->getIndexNumber()]) }}">
                {{ $user->getName() }}
            </a>
        </h4>
        {{ $user->getIndexNumber() }}
        <br>
        {{ $user->getEmail() }}
    </div>
    <hr>
</div>