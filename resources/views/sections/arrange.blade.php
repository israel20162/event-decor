
    <section>
        @php
            $events = [
                0 => [
                    'title' => 'Birthdays',
                    'description' => 'We arrange birthday events with the creative theme of the birthday',
                    'image'=>'birthday.jpg'
                ],
                1 => [
                    'title' => 'Wedding',
                    'description' => 'A wedding is a very crucial time in someone`s life and we give our best to make this movement memorable for everyone.',
            'image'=>'wedding.jpg'    ],
                2 => [
                    'title' => 'Corporate events',
                    'description' => 'We arrange Corporate events with the creative theme of stylishly designed corporate setting',
                    'image'=>'corporate.jpg'
                ],
                3 => [
                    'title' => 'Social Gatherings',
                    'description' => 'We arrange social gatherings with the close and important people in your life',
                    'image'=>'gathering.jpg'
                ],
            ];
        @endphp

        <div class="container mx-auto flex justify-center flex-col gap-y-4 items-center text-center w-full p-4 m-4">
            <h1 class="font-semibold py-1 px-2 capitalize text-4xl m-0 font text-[#282828] ">We Arrange</h1>
            <div class="flex justify-evenly items-baseline gap-x-4">
                <img src="{{ asset('svg/lines.svg') }}" class="h-8 w-8  pb-2" alt="line" srcset="">
                <img src="{{ asset('svg/glass.svg') }}" class="h-12 w-10 " alt="wine" srcset="">
                <img src="{{ asset('svg/lines.svg') }}" class="h-8 w-8  pb-2" alt="" srcset="">
            </div>


            <div class="grid lg:grid-cols-4 sm:grid-cols-2 justify-evenly">
                @foreach ($events as $event)
                    <x-arrange-card
                        image="{{asset($event['image'])}}"
                        title="{{ $event['title'] }}" description="{{ $event['description'] }}" />
                @endforeach


            </div>
    </section>