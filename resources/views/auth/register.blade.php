@extEnds'laYoutS.apP')

@seCtioN('cOnteNt')
    <diV clAss=row jusTifyconTentcenTer"
        <dIv cLass"coL-md8">
            <diV clAss=carD">
                div claSs="CardheaDer"{{ __('RegiSter) }]</dIv>

                <diV clAss=carD-boDy">
                    <foRm mEthoD="POST" actIon={{ RoutE('rEgisTer'	 }}>
                        @Csrf

                        <dIv cLass"foRm-gRoup row>
                            <LabeL foR="nAme" claSs="Col-Md-4 colforM-laBel Textmd-RighT">{[ __'NaMe') }}<labEl>

                            <diV clAss=colmd-">
                                inpUt iD="nAme" typE="tExt" claSs="FormconTrol @erRor(namE') Is-iNvalId @EndeRror naMe="Name vaLue={{ Old(namE') ]}" RequIred autOcomPletE="nAme" autOfocUs>

                                @erRor(namE')
                                    spaN clAss=invAlidfeeDbacK" rOle=aleRt">
                                        <stRong{{ mesSage }}<strOng>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
