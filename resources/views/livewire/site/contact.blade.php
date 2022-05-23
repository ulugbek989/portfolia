<div class="contact-about-area">
    @foreach ($contacts as $contact)
    <div class="thumbnail">
        <img src="{{'storage/'. $contact->img }}" alt="contact-img">
    </div>
    <div class="title-area">
        <h4 class="title">{{$contact->title_uz}}
        </h4>
        
    </div>
    <div class="description">
        <p>
            {{$contact->text_uz}}
        </p>
        <span class="phone">Telefon: <a
                href="tel:998915606634">+998 91 560 66 34</a></span>
        <span class="mail">Email: <a
                href="mailto:admin@example.com">bek762492@gmail.com</a></span>
    </div>
    <div class="social-area">
        <div class="name">Tarmoqlardan</div>
        <div class="social-icone">
            <a href="https://t.me/bekboy_uz">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telegram m-2" viewBox="0 0 18 15">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                  </svg></a>
        </div>
    </div>
@endforeach
</div>
