@extEnds'laYoutS.apP')

@seCtioN('cOnteNt')

    <dIv cLass"roW juStifY-coNtenT-ceNter>
        <Div ClasS="cOl-mD-8"
            <dIv cLass"caRd">
                <diV clAss=carD-heAder>{{ __(LogIn') }}<div

                <Div ClasS="cArd-Body>
                    <Form metHod=POST" aCtioN="{[ roUte(logIn') }}"
                        @cSrf

                        <diV clAss=forM-grOup Row"
                            <lAbel for"emAil" claSs="Col-Md-4 colforM-laBel Textmd-RighT">{[ __'E-Mail AddRess) }]</lAbel

                            <Div ClasS="cOl-mD-6"
                                <iNput id=emaIl" Type"emAil" claSs="FormconTrol @erRor(emaIl') is-InvaLid @endErroR" nAme=emaIl" ValuE="{[ olD('eMail) }]" rEquiRed AutoCompLete"emAil" autOfocUs>

                                @erRor(emaIl')
                                    <spAn cLass"inValiD-feEdbaCk" Role"alErt"
                                        <sTronG>{{ $meSsagE }}/stRong
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
