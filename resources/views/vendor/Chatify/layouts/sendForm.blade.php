<div class="messenger-sendCard">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data" class="w-full items-center space-x-3 rtl:space-x-reverse sm:flex">
        @csrf
        <div class="relative flex-1">
            <input readonly='readonly' name="message" placeholder="Ecrire un message.." class="m-send app-scroll form-input rounded-full border-0 bg-[#f4f4f4] px-12 py-2 focus:outline-none" >
            <button type="button" class="absolute top-1/2 -translate-y-1/2 hover:text-primary ltr:left-4 rtl:right-4">
                
            </button>
            <button class="emoji-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"></circle>
                <path d="M9 16C9.85038 16.6303 10.8846 17 12 17C13.1154 17 14.1496 16.6303 15 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M16 10.5C16 11.3284 15.5523 12 15 12C14.4477 12 14 11.3284 14 10.5C14 9.67157 14.4477 9 15 9C15.5523 9 16 9.67157 16 10.5Z" fill="currentColor"></path>
                <ellipse cx="9" cy="10.5" rx="1" ry="1.5" fill="currentColor"></ellipse>
            </svg></button>
            <button disabled='disabled' class="send-button absolute top-1/2 -translate-y-1/2 hover:text-primary ltr:right-4 rtl:left-4" @click="sendMessage()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                    <path d="M17.4975 18.4851L20.6281 9.09373C21.8764 5.34874 22.5006 3.47624 21.5122 2.48782C20.5237 1.49939 18.6511 2.12356 14.906 3.37189L5.57477 6.48218C3.49295 7.1761 2.45203 7.52305 2.13608 8.28637C2.06182 8.46577 2.01692 8.65596 2.00311 8.84963C1.94433 9.67365 2.72018 10.4495 4.27188 12.0011L4.55451 12.2837C4.80921 12.5384 4.93655 12.6658 5.03282 12.8075C5.22269 13.0871 5.33046 13.4143 5.34393 13.7519C5.35076 13.9232 5.32403 14.1013 5.27057 14.4574C5.07488 15.7612 4.97703 16.4131 5.0923 16.9147C5.32205 17.9146 6.09599 18.6995 7.09257 18.9433C7.59255 19.0656 8.24576 18.977 9.5522 18.7997L9.62363 18.79C9.99191 18.74 10.1761 18.715 10.3529 18.7257C10.6738 18.745 10.9838 18.8496 11.251 19.0285C11.3981 19.1271 11.5295 19.2585 11.7923 19.5213L12.0436 19.7725C13.5539 21.2828 14.309 22.0379 15.1101 21.9985C15.3309 21.9877 15.5479 21.9365 15.7503 21.8474C16.4844 21.5244 16.8221 20.5113 17.4975 18.4851Z" stroke="currentColor" stroke-width="1.5"></path>
                    <path opacity="0.5" d="M6 18L21 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
            </button>
        </div>
        <div class="hidden items-center space-x-3 py-3 rtl:space-x-reverse sm:block sm:py-0">
            
            <button type="button" class="rounded-md bg-[#f4f4f4] p-2 hover:bg-primary-light hover:text-primary dark:bg-[#1b2e4b]">
                
                <label><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                    <path opacity="0.5" d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                    <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg><input disabled='disabled' type="file" class="upload-attachment" name="file" accept=".{{implode(', .',config('chatify.attachments.allowed_images'))}}, .{{implode(', .',config('chatify.attachments.allowed_files'))}}" /></label>
            </button>
            
            
        </div>
    </form>
    {{-- <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        
       
        <textarea readonly='readonly' name="message" class="m-send app-scroll" placeholder="Type a message.."></textarea>
        <button disabled='disabled' class="send-button"><span class="fas fa-paper-plane"></span></button>
    </form> --}}
</div>
