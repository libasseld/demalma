<li id="text-5" class="widget widget_text">
    <h2 class="widgettitle">Nous contacter</h2>
    <div class="textwidget">
        <div role="form" class="wpcf7" id="wpcf7-f2465-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response"></div>
            <form class="quform"  method="post" onclick="">

                <div class="quform-elements">
                    <div class="quform-element">
                        
                            <br>
                            <span class="wpcf7-form-control-wrap your-name">
                                <input id="name" type="text" wire:model="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Nom*">
                            </span> 
                            @error('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        
                    </div>
                    <div class="quform-element">
                        
                            <br>
                            <span class="wpcf7-form-control-wrap your-email">
                                <input id="email" type="text" wire:model="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                            </span> 
                            @error('email')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        
                    </div>
                    <div class="quform-element">
                        
                            <br>
                            <span class="wpcf7-form-control-wrap your-phone">
                                <input id="tel" type="text" wire:model="phone" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Numéro de Téléphone*">
                            </span> 
                            @error('phone')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        
                    </div>
                    <div class="quform-element">
                        
                            <br>
                            <span class="wpcf7-form-control-wrap your-message">
                                <textarea  id="message" wire:model="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                            </span>
                            @error('message')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        
                    </div>
                    
                    <!-- Begin Submit button -->
                    <div class="quform-submit">
                        <div class="quform-submit-inner">
                            <button type="button" wire:click="envoyer" class="btn-primary"><span>Envoyer</span></button>
                        </div>
                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</li>