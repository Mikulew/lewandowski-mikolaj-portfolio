<!DOCTYPE html>
<html lang="pl">
  <head>
    @include('partials._head')
    @yield('css')
  </head>
  <body>
<!--            NAV MENU-->       
            <div id="menu" class="hamburger">
                <div class="hamburger-panel hamburger-1"></div>
                <div class="hamburger-panel hamburger-2"></div>
                <div class="hamburger-panel hamburger-3"></div>
            </div>
            <nav class="navbar">
                <div class="navbar-menu">
                    <a href="{{url('/')}}" class="{{ Request::is('/') ? 'active' : '' }} navlabel" tabindex="1">
                        <div class="navicon">
                            <svg baseProfile="tiny" height="24px" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,3c0,0-6.186,5.34-9.643,8.232C2.154,11.416,2,11.684,2,12c0,0.553,0.447,1,1,1h2v7c0,0.553,0.447,1,1,1h3  c0.553,0,1-0.448,1-1v-4h4v4c0,0.552,0.447,1,1,1h3c0.553,0,1-0.447,1-1v-7h2c0.553,0,1-0.447,1-1c0-0.316-0.154-0.584-0.383-0.768  C18.184,8.34,12,3,12,3z"/></svg>
                        </div>
                        <span class="navtext">Strona główna</span>
                    </a>
                    <a href="{{url('about')}}" class="{{ Request::is('about') ? 'active' : '' }} navlabel" tabindex="2">
                        <div class="navicon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="16.403px" height="19.625px" viewBox="3.848 4.375 16.403 19.625" enable-background="new 3.848 4.375 16.403 19.625"
                                 xml:space="preserve">
                            <g>
                                <path d="M12.051,24c-1.721,0-3.442,0.002-5.164-0.002c-0.964-0.001-1.804-0.303-2.432-1.07C4.033,22.412,3.861,21.8,3.85,21.145
                                    c-0.023-1.406,0.113-2.797,0.591-4.134c0.246-0.693,0.595-1.331,1.134-1.843c0.633-0.601,1.401-0.866,2.266-0.857
                                    c0.109,0.001,0.224,0.056,0.32,0.114c0.326,0.196,0.641,0.41,0.965,0.611c0.998,0.615,2.074,0.944,3.252,0.87
                                    c0.898-0.057,1.728-0.343,2.499-0.801c0.258-0.153,0.524-0.298,0.752-0.488c0.425-0.351,0.887-0.347,1.386-0.24
                                    c1.052,0.227,1.771,0.873,2.277,1.793c0.505,0.914,0.75,1.909,0.859,2.934c0.076,0.756,0.122,1.523,0.085,2.278
                                    c-0.071,1.37-1.054,2.378-2.412,2.57c-0.221,0.032-0.448,0.046-0.672,0.046C15.453,24,13.754,24,12.051,24z"/>
                                <path d="M11.864,4.375c2.434,0.007,4.354,1.938,4.347,4.371c-0.006,2.429-1.941,4.354-4.372,4.347
                                    c-2.42-0.005-4.345-1.95-4.337-4.382C7.51,6.292,9.445,4.368,11.864,4.375z"/>
                            </g>
                            </svg>
                        </div>
                        <span class="navtext">O mnie</span>
                    </a>
                    <a href="{{route('pages.contact')}}" class="{{ Request::is('contact') ? 'active' : '' }} navlabel" tabindex="3">
                        <div class="navicon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="20px" height="15.967px" viewBox="0 0 20 15.967" enable-background="new 0 0 20 15.967" xml:space="preserve">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0,14.837c0-3.192,0-6.386,0-9.578c2.371,1.327,4.742,2.658,7.115,3.982
                                    c0.731,0.408,1.468,0.806,2.207,1.197c0.447,0.237,0.904,0.226,1.356,0.003c0.212-0.105,0.428-0.204,0.635-0.319
                                    C14.21,8.502,17.105,6.88,20,5.259c0,3.192,0,6.386,0,9.578c-0.009,0.018-0.019,0.037-0.026,0.056
                                    c-0.223,0.756-0.627,1.074-1.365,1.074c-1.302,0-2.604,0-3.904,0c-4.458,0-8.916,0-13.374,0.002c-0.481,0-0.863-0.191-1.126-0.619
                                    C0.112,15.196,0.067,15.009,0,14.837z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20,1.034c0,0.404,0,0.808,0,1.213c-0.01,0.009-0.019,0.019-0.031,0.025
                                    c-3.283,1.849-6.566,3.698-9.852,5.539C10.05,7.849,9.928,7.839,9.857,7.8c-3.228-1.812-6.453-3.628-9.68-5.443
                                    C0.123,2.326,0.06,2.311,0,2.289c0-0.433,0-0.865,0-1.296c0.244-0.835,0.794-1.1,1.58-1.097c5.123,0.018,10.247,0.009,15.371,0.009
                                    c0.605,0,1.211-0.007,1.815,0.003c0.481,0.009,0.846,0.251,1.08,0.702C19.914,0.741,19.949,0.892,20,1.034z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M0,2.289c0.06,0.022,0.123,0.037,0.177,0.068
                                    C3.404,4.172,6.629,5.988,9.857,7.8c0.071,0.039,0.193,0.049,0.261,0.011c3.286-1.841,6.569-3.69,9.852-5.539
                                    C19.981,2.266,19.99,2.256,20,2.247c0,1.003,0,2.008,0,3.012c-2.895,1.621-5.79,3.243-8.687,4.863
                                    c-0.207,0.116-0.423,0.214-0.635,0.319c-0.452,0.223-0.909,0.234-1.356-0.003c-0.739-0.391-1.476-0.789-2.207-1.197
                                    C4.742,7.917,2.371,6.586,0,5.259C0,4.269,0,3.279,0,2.289z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M0,14.837c0.067,0.172,0.112,0.358,0.206,0.512
                                    c0.263,0.428,0.645,0.62,1.126,0.619c4.458-0.002,8.915-0.002,13.374-0.002c1.3,0,2.602,0,3.904,0c0.738,0,1.142-0.318,1.365-1.074
                                    c0.007-0.019,0.017-0.038,0.026-0.056c0,1.27,0,2.538,0,3.807c-6.667,0-13.333,0-20,0C0,17.375,0,16.107,0,14.837z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M20,1.034c-0.051-0.143-0.086-0.293-0.154-0.425
                                    c-0.233-0.451-0.599-0.692-1.08-0.702c-0.604-0.011-1.21-0.003-1.815-0.003c-5.124,0-10.248,0.009-15.371-0.009
                                    C0.794-0.107,0.244,0.157,0,0.992c0-1.253,0-2.508,0-3.763c6.667,0,13.333,0,20,0C20-1.502,20-0.234,20,1.034z"/>
                            </g>
                            </svg>
                        </div>
                        <span class="navtext">Kontakt</span>
                    </a>
                    <a href="{{route('pages.project.index')}}" class="{{ Request::is('project') ? 'active' : '' }} navlabel" tabindex="4">
                        <div class="navicon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="20.896px" height="15.967px" viewBox="0 0 20.896 15.967" enable-background="new 0 0 20.896 15.967" xml:space="preserve">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M-0.202,18.635c0-7.1,0-14.199,0-21.303c7.097,0,14.195,0,21.3,0
                                    c0,7.099,0,14.201,0,21.303C14,18.635,6.9,18.635-0.202,18.635z M12.213,12.379c1.364,0,2.727,0,4.09,0
                                    c1.115,0,2.229,0.002,3.343-0.001c0.768-0.002,1.33-0.526,1.333-1.264c0.006-2.173,0.005-4.346-0.005-6.52
                                    c-0.001-0.192-0.059-0.402-0.147-0.573c-0.259-0.503-0.703-0.684-1.254-0.68c-1.509,0.008-3.018,0.02-4.526-0.007
                                    c-0.492-0.008-0.996-0.076-1.469-0.21c-0.727-0.206-1.124-0.74-1.084-1.489c0.032-0.592-0.241-1.109-0.719-1.472
                                    c-0.164-0.124-0.404-0.205-0.61-0.207C9.033-0.058,6.901-0.055,4.77-0.053C3.983-0.052,3.438,0.498,3.438,1.282
                                    c0,3.259,0,6.52,0.001,9.778c0,0.778,0.54,1.317,1.321,1.317C7.245,12.379,9.728,12.379,12.213,12.379z M17.59,13.24
                                    c-0.083-0.004-0.145-0.009-0.206-0.009c-1.765-0.001-3.529-0.001-5.294-0.001c-2.45,0-4.899-0.001-7.35-0.001
                                    c-0.456,0-0.875-0.124-1.246-0.39c-0.641-0.461-0.913-1.099-0.912-1.878C2.589,8.545,2.586,6.13,2.587,3.715
                                    c0-0.121,0-0.242,0-0.371c-0.418,0-0.798,0-1.179,0c-0.829-0.001-1.361,0.53-1.361,1.361c0,3.233,0,6.465,0,9.698
                                    c0,0.841,0.538,1.368,1.379,1.367c3.53-0.001,7.06,0,10.589,0.001c1.418,0,2.838,0.001,4.257-0.001
                                    c0.743-0.002,1.278-0.5,1.315-1.24C17.607,14.109,17.59,13.686,17.59,13.24z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.08,11.291c-2.215,0-4.429,0-6.644-0.001c-0.696,0-1.177-0.49-1.177-1.196
                                    c-0.001-2.959-0.001-5.92-0.001-8.879c0-0.712,0.486-1.212,1.187-1.213c1.899-0.001,3.8-0.004,5.7,0.009
                                    c0.183,0.002,0.398,0.076,0.544,0.188c0.425,0.33,0.669,0.799,0.64,1.336c-0.035,0.681,0.319,1.166,0.967,1.353
                                    c0.421,0.122,0.871,0.184,1.31,0.191c1.345,0.024,2.689,0.013,4.034,0.006c0.491-0.003,0.887,0.16,1.118,0.618
                                    c0.079,0.155,0.13,0.346,0.13,0.52c0.009,1.973,0.01,3.948,0.005,5.92c-0.002,0.669-0.504,1.146-1.188,1.147
                                    c-0.993,0.003-1.986,0.001-2.979,0.001C15.51,11.291,14.296,11.291,13.08,11.291z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.59,13.437c0,0.445,0.017,0.869-0.003,1.289
                                    c-0.037,0.74-0.572,1.238-1.315,1.24c-1.418,0.002-2.838,0.001-4.257,0.001c-3.529-0.001-7.06-0.002-10.589-0.001
                                    c-0.842,0.001-1.379-0.525-1.379-1.367c0-3.233,0-6.465,0-9.698c0-0.831,0.532-1.363,1.361-1.361c0.381,0,0.761,0,1.179,0
                                    c0,0.129,0,0.25,0,0.371c0,2.415,0.002,4.83-0.004,7.246c-0.001,0.779,0.271,1.417,0.912,1.878c0.371,0.266,0.79,0.39,1.246,0.39
                                    c2.45,0,4.9,0.001,7.35,0.001c1.766,0,3.53,0,5.294,0.001C17.446,13.427,17.508,13.432,17.59,13.437z"/>
                            </g>
                            </svg>
                        </div>
                        <span class="navtext">Moje projekty</span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <a href="{{route('pages.canvas.index')}}" class="{{ Request::is('canvas') ? 'active' : '' }} navlabel" tabindex="5">
                        <div class="navicon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="24.288px" height="16.021px" viewBox="0 0 24.288 16.021" enable-background="new 0 0 24.288 16.021" xml:space="preserve">
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M-2.939,23.623c0-9.996,0-19.992,0-29.992c9.991,0,19.984,0,29.986,0
                                c0,9.994,0,19.993,0,29.992C17.057,23.623,7.06,23.623-2.939,23.623z M44.779-8.989"/>
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M0,20.02C0,11.924,0,3.829,0-4.271c8.094,0,16.188,0,24.288,0
                                    c0,8.095,0,16.193,0,24.292C16.193,20.02,8.096,20.02,0,20.02z M12.16,11.693c1.271,0,2.542-0.004,3.812,0.002
                                    c0.49,0.002,0.898,0.204,1.233,0.563c0.678,0.726,1.344,1.464,2.043,2.169c0.544,0.548,1.131,1.058,1.833,1.404
                                    c0.758,0.375,1.732,0.187,2.254-0.477c0.229-0.29,0.435-0.641,0.514-0.996c0.167-0.75,0.294-1.518,0.351-2.285
                                    c0.197-2.696-0.208-5.299-1.331-7.771c-0.511-1.125-1.113-2.197-2.038-3.046c-1.01-0.928-2.195-1.362-3.575-1.232
                                    c-1.159,0.11-2.195,0.543-3.147,1.195c-0.359,0.245-0.75,0.409-1.184,0.434c-1.086,0.062-2.173,0.107-3.073-0.68
                                    c-0.036-0.03-0.08-0.051-0.121-0.074C8.748,0.341,7.702-0.015,6.562,0c-1.391,0.02-2.52,0.625-3.437,1.646
                                    c-0.892,0.995-1.491,2.167-1.968,3.4c-1.028,2.653-1.281,5.399-0.906,8.209c0.077,0.577,0.177,1.153,0.455,1.68
                                    c0.534,1.013,1.674,1.372,2.682,0.827c0.221-0.119,0.432-0.261,0.632-0.413c1.16-0.888,2.137-1.96,3.089-3.058
                                    c0.339-0.392,0.769-0.597,1.286-0.598C9.651,11.69,10.906,11.693,12.16,11.693z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.16,11.693c-1.254,0-2.509-0.002-3.764,0.001
                                    c-0.518,0.001-0.947,0.207-1.286,0.598c-0.952,1.098-1.929,2.17-3.089,3.058c-0.2,0.152-0.412,0.294-0.632,0.413
                                    C2.38,16.308,1.24,15.95,0.706,14.937c-0.278-0.527-0.378-1.104-0.455-1.68c-0.375-2.81-0.122-5.556,0.906-8.209
                                    c0.477-1.234,1.076-2.406,1.968-3.4C4.042,0.625,5.17,0.021,6.562,0c1.14-0.016,2.186,0.34,3.17,0.899
                                    c0.041,0.023,0.085,0.044,0.121,0.074c0.9,0.787,1.987,0.742,3.073,0.68c0.434-0.025,0.825-0.188,1.184-0.434
                                    c0.953-0.651,1.989-1.084,3.147-1.195c1.38-0.13,2.564,0.304,3.575,1.232c0.925,0.849,1.527,1.921,2.038,3.046
                                    c1.124,2.473,1.528,5.076,1.331,7.771c-0.056,0.767-0.183,1.534-0.351,2.285c-0.079,0.354-0.286,0.706-0.514,0.996
                                    c-0.522,0.663-1.497,0.852-2.254,0.477c-0.702-0.347-1.289-0.856-1.833-1.404c-0.7-0.705-1.366-1.443-2.043-2.169
                                    c-0.335-0.358-0.743-0.56-1.233-0.563C14.702,11.688,13.431,11.693,12.16,11.693z M7.904,8.5c0-0.599,0-1.185,0-1.8
                                    c0.614,0,1.2,0,1.781,0c0-0.641,0-1.253,0-1.897c-0.599,0-1.185,0-1.794,0c0-0.611,0-1.192,0-1.771c-0.65,0-1.275,0-1.926,0
                                    c0,0.599,0,1.179,0,1.79c-0.604,0-1.182,0-1.76,0c0,0.643,0,1.255,0,1.894c0.595,0,1.174,0,1.78,0c0,0.614,0,1.2,0,1.784
                                    C6.635,8.5,7.255,8.5,7.904,8.5z M20.114,7.241c0.724,0.003,1.318-0.587,1.314-1.303c-0.004-0.709-0.591-1.298-1.296-1.302
                                    c-0.72-0.003-1.308,0.585-1.307,1.309C18.826,6.662,19.398,7.238,20.114,7.241z M18.159,4.033c0.018-0.721-0.562-1.322-1.284-1.333
                                    c-0.701-0.011-1.293,0.565-1.316,1.281c-0.023,0.709,0.571,1.323,1.288,1.331C17.558,5.319,18.144,4.75,18.159,4.033z
                                     M16.875,6.312c-0.725-0.008-1.313,0.571-1.316,1.296c-0.003,0.712,0.572,1.296,1.286,1.307c0.71,0.009,1.302-0.564,1.315-1.277
                                    C18.174,6.912,17.601,6.32,16.875,6.312z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M7.904,8.5c-0.649,0-1.269,0-1.918,0c0-0.584,0-1.17,0-1.784
                                    c-0.606,0-1.186,0-1.78,0c0-0.639,0-1.251,0-1.894c0.578,0,1.156,0,1.76,0c0-0.611,0-1.19,0-1.79c0.65,0,1.275,0,1.926,0
                                    c0,0.579,0,1.16,0,1.771c0.609,0,1.195,0,1.794,0c0,0.644,0,1.256,0,1.897c-0.582,0-1.167,0-1.781,0
                                    C7.904,7.314,7.904,7.901,7.904,8.5z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M20.114,7.241c-0.716-0.002-1.288-0.579-1.289-1.296
                                    c-0.001-0.723,0.587-1.312,1.307-1.309c0.705,0.003,1.292,0.592,1.296,1.302C21.432,6.654,20.837,7.244,20.114,7.241z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M18.159,4.033c-0.016,0.716-0.601,1.286-1.313,1.279
                                    c-0.716-0.008-1.311-0.622-1.288-1.331c0.023-0.716,0.615-1.292,1.316-1.281C17.597,2.711,18.177,3.313,18.159,4.033z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M16.875,6.312c0.726,0.009,1.299,0.6,1.286,1.326
                                    c-0.013,0.712-0.605,1.286-1.315,1.277c-0.714-0.01-1.289-0.594-1.286-1.307C15.562,6.883,16.15,6.303,16.875,6.312z"/>
                            </g>
                            </svg>
                        </div>
                        <span class="navtext">Gry i animacje</span>
                        </a>
                        <a href="{{route('pages.book.index')}}" class="{{ Request::is('book') ? 'active' : '' }} navlabel" tabindex="6">
                            <div class="navicon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="20.714px" height="19.367px" viewBox="0 0 20.714 19.367" enable-background="new 0 0 20.714 19.367" xml:space="preserve">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M0.063,12.601c0-4.429,0-8.859,0-13.288c6.915,0,13.828,0,20.742,0
                                        c0,6.914,0,13.828,0,20.742c-6.914,0-13.827,0-20.742,0c0-2.282,0-4.564,0-6.847c0.014,0.065,0.034,0.13,0.041,0.196
                                        c0.055,0.474,0.179,0.928,0.408,1.346c0.433,0.79,1.025,1.415,1.909,1.68c3.079,0.922,6.163,1.829,9.243,2.748
                                        c0.442,0.132,0.781,0.027,1.075-0.33c1.094-1.329,2.197-2.65,3.296-3.975c1.445-1.74,2.889-3.479,4.334-5.218
                                        c0.229-0.274,0.319-0.57,0.195-0.916c-0.176-0.488-0.174-0.975-0.01-1.467c0.046-0.137,0.074-0.293,0.059-0.435
                                        c-0.043-0.385-0.336-0.662-0.7-0.701c-0.365-0.038-0.702,0.203-0.843,0.593c-0.225,0.624-0.279,1.264-0.158,1.912
                                        c0.034,0.18,0,0.299-0.113,0.436c-2.311,2.775-4.617,5.554-6.921,8.335c-0.091,0.111-0.168,0.133-0.306,0.093
                                        c-2.833-0.846-5.668-1.693-8.507-2.526c-0.54-0.159-0.903-0.497-1.153-0.973c-0.285-0.543-0.31-1.124-0.198-1.715
                                        c0.13-0.678,0.52-0.959,1.196-0.87c0.086,0.011,0.171,0.037,0.255,0.061c2.644,0.753,5.288,1.507,7.931,2.265
                                        c0.296,0.084,0.576,0.083,0.827-0.109c0.111-0.085,0.203-0.197,0.296-0.305c2.734-3.149,5.47-6.3,8.205-9.45
                                        c0.538-0.619,0.31-1.311-0.487-1.488c-3.158-0.705-6.317-1.399-9.47-2.123C9.894,0.138,9.5,0.264,9.11,0.702
                                        C6.53,3.601,3.933,6.487,1.333,9.369c-0.478,0.529-0.808,1.129-0.983,1.811C0.23,11.647,0.157,12.126,0.063,12.601z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.063,12.601c0.095-0.474,0.167-0.954,0.288-1.42
                                        c0.175-0.682,0.505-1.282,0.983-1.811C3.933,6.487,6.53,3.601,9.11,0.702C9.5,0.264,9.894,0.138,10.464,0.27
                                        c3.153,0.724,6.313,1.418,9.47,2.123c0.797,0.177,1.025,0.87,0.487,1.488c-2.735,3.15-5.47,6.301-8.205,9.45
                                        c-0.093,0.108-0.185,0.22-0.296,0.305c-0.25,0.192-0.53,0.194-0.827,0.109c-2.643-0.757-5.287-1.511-7.931-2.265
                                        c-0.084-0.024-0.169-0.05-0.255-0.061c-0.676-0.089-1.066,0.192-1.196,0.87c-0.112,0.591-0.087,1.172,0.198,1.715
                                        c0.25,0.477,0.613,0.814,1.153,0.973c2.839,0.833,5.673,1.68,8.507,2.526c0.138,0.041,0.215,0.018,0.306-0.093
                                        c2.304-2.781,4.611-5.56,6.921-8.335c0.113-0.137,0.147-0.256,0.113-0.436c-0.121-0.648-0.067-1.288,0.158-1.912
                                        c0.141-0.391,0.478-0.631,0.843-0.593c0.364,0.039,0.657,0.316,0.7,0.701c0.015,0.141-0.015,2.544-0.244,2.818
                                        c-1.445,1.739-2.89,3.479-4.334,5.218c-1.099,1.325-2.202,2.646-3.296,3.975c-0.293,0.357-0.632,0.461-1.075,0.33
                                        c-3.08-0.919-6.164-1.825-9.243-2.748c-0.884-0.265-1.476-0.891-1.909-1.68c-0.229-0.418-0.353-0.873-0.408-1.346
                                        c-0.007-0.066-0.027-0.13-0.041-0.196C0.063,13.006,0.063,12.803,0.063,12.601z M9.797,3.336C9.449,3.347,9.199,3.401,9.015,3.604
                                        c-0.221,0.245-0.433,0.5-0.639,0.757c-0.136,0.17-0.085,0.354,0.11,0.451c0.078,0.039,0.162,0.068,0.246,0.089
                                        c1.923,0.471,3.847,0.942,5.771,1.407c0.447,0.107,0.838,0.014,1.132-0.375c0.146-0.193,0.314-0.37,0.468-0.559
                                        c0.186-0.229,0.141-0.406-0.131-0.522c-0.074-0.032-0.152-0.056-0.229-0.076C14.207,4.4,12.67,4.025,11.133,3.651
                                        C10.662,3.537,10.189,3.429,9.797,3.336z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M9.797,3.336c0.392,0.092,0.865,0.2,1.335,0.315
                                        c1.537,0.374,3.074,0.749,4.611,1.125c0.078,0.02,0.155,0.044,0.229,0.076c0.271,0.117,0.316,0.293,0.131,0.522
                                        c-0.154,0.188-0.322,0.365-0.468,0.559c-0.294,0.389-0.686,0.482-1.132,0.375c-1.925-0.465-3.848-0.936-5.771-1.407
                                        C8.649,4.881,8.564,4.851,8.487,4.813c-0.195-0.097-0.246-0.28-0.11-0.451C8.582,4.104,8.794,3.85,9.015,3.604
                                        C9.199,3.401,9.449,3.347,9.797,3.336z"/>
                                </g>
                                </svg>
                            </div>
                            <span class="navtext">Biblioteczka</span>
                        </a>
                        <a href="{{route('pages.post.index')}}" class="{{ Request::is('blog') ? 'active' : '' }} navlabel" tabindex="7">
                            <div class="navicon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="17.27px" height="19.414px" viewBox="0 0 17.27 19.414" enable-background="new 0 0 17.27 19.414" xml:space="preserve">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M11.602,0c1.889,0,3.778,0,5.668,0c0,6.058,0,12.117,0,18.174
                                        c-6.058,0-12.117,0-18.174,0c0-6.057,0-12.116,0-18.174c1.063,0,2.125,0,3.188,0c-0.02,0.01-0.041,0.028-0.062,0.03
                                        C1.319,0.127,0.4,0.965,0.405,2.215c0.015,3.767,0.004,7.533,0.005,11.3c0,1.226,0.902,2.146,2.129,2.148
                                        c2.934,0.006,5.868,0.006,8.802-0.004c0.26,0,0.532-0.05,0.776-0.141c0.835-0.307,1.35-1.086,1.351-2.011
                                        c0.001-1.883,0-3.766,0-5.649c0-1.895,0.002-3.791,0-5.686c-0.002-1.043-0.657-1.879-1.648-2.115
                                        C11.746,0.041,11.674,0.02,11.602,0z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.14,0c0.073,0.02,0.145,0.041,0.218,0.059
                                        c0.991,0.236,1.646,1.071,1.648,2.115c0.002,1.895,0,3.791,0,5.686c0,1.883,0.001,3.766,0,5.649
                                        c-0.001,0.924-0.516,1.704-1.351,2.011c-0.244,0.09-0.516,0.14-0.776,0.141c-2.933,0.01-5.867,0.01-8.802,0.004
                                        c-1.227-0.003-2.128-0.922-2.128-2.148c-0.001-3.767,0.009-7.534-0.006-11.3C-0.062,0.965,0.857,0.127,1.76,0.03
                                        C1.782,0.028,1.802,0.01,1.822,0C4.928,0,8.034,0,11.14,0z M11.574,7.882c0.002,0,0.003,0,0.006,0c0-1.47,0.003-2.94-0.005-4.409
                                        c-0.001-0.221-0.03-0.452-0.1-0.659c-0.235-0.685-0.855-1.099-1.63-1.099c-2.267-0.003-4.533-0.001-6.8-0.001
                                        c-0.047,0-0.095,0.003-0.142,0.006c-0.954,0.063-1.614,0.76-1.615,1.716c-0.002,2.975-0.001,5.95,0,8.925
                                        c0.001,0.943,0.714,1.692,1.656,1.697c2.325,0.011,4.651,0.011,6.977,0c0.918-0.005,1.634-0.704,1.648-1.625
                                        C11.59,10.916,11.574,9.398,11.574,7.882z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.186,17.786c0.313,0.019,0.592,0.049,0.873,0.049
                                        c3.313,0.003,6.627,0.005,9.941,0.001c1.258-0.001,2.265-0.821,2.514-2.044c0.044-0.212,0.052-0.435,0.052-0.652
                                        c0.003-4.479,0.002-8.957,0.002-13.433c0-0.096,0-0.191,0-0.321c0.094,0.033,0.164,0.051,0.227,0.082
                                        c0.943,0.452,1.465,1.194,1.468,2.239c0.01,4.389,0.005,8.777,0.003,13.167c0,1.479-1.057,2.537-2.549,2.54
                                        c-3.204,0.003-6.408,0.003-9.612-0.002c-0.39,0-0.792,0.006-1.17-0.075C3.072,19.147,2.51,18.591,2.186,17.786z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.63,6.464c1.067,0,2.134-0.002,3.2,0.001c0.24,0,0.383,0.355,0.37,0.916
                                        c-0.01,0.431-0.093,0.726-0.251,0.825C9.896,8.24,9.841,8.241,9.787,8.243c-2.106,0.001-4.213,0.001-6.319,0
                                        c-0.287,0-0.424-0.345-0.404-1.002c0.011-0.415,0.116-0.717,0.268-0.763c0.06-0.019,0.12-0.014,0.18-0.014
                                        C4.551,6.464,5.59,6.464,6.63,6.464z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.63,9.748c1.067,0,2.133-0.002,3.2,0.001c0.24,0,0.383,0.356,0.37,0.916
                                        c-0.01,0.431-0.093,0.727-0.251,0.825c-0.053,0.034-0.108,0.035-0.163,0.037c-2.105,0.001-4.212,0.001-6.318,0
                                        c-0.287,0-0.424-0.345-0.404-1.001c0.011-0.416,0.116-0.718,0.268-0.764c0.06-0.019,0.12-0.014,0.18-0.014
                                        C4.551,9.748,5.59,9.748,6.63,9.748z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.874,4.938c-0.664,0-1.328,0.002-1.992-0.003
                                        c-0.196-0.002-0.317-0.23-0.337-0.611C5.521,3.845,5.637,3.495,5.839,3.45C5.86,3.446,5.881,3.447,5.902,3.447
                                        C7.214,3.446,8.527,3.446,9.84,3.449c0.222,0,0.346,0.242,0.36,0.68c0.017,0.496-0.106,0.804-0.334,0.807
                                        C9.343,4.943,8.82,4.938,8.297,4.938C8.157,4.938,8.015,4.938,7.874,4.938z"/>
                                </g>
                                </svg>
                            </div>
                            <span class="navtext">Blog</span>
                        </a>
                        @if (Auth::user())
                            <a href="{{route('admin')}}" class="navlabel" tabindex="8">
                                <div class="navicon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="17.27px" height="17.304px" viewBox="0 0 17.27 17.304" enable-background="new 0 0 17.27 17.304" xml:space="preserve">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M2.18,17.304c-0.727,0-1.453,0-2.18,0C0,11.536,0,5.768,0,0
                                            c5.768,0,11.536,0,17.304,0c0,5.768,0,11.536,0,17.304c-4.857,0-9.715,0-14.572,0c0.043-0.013,0.084-0.029,0.128-0.038
                                            c0.418-0.083,0.804-0.241,1.119-0.532c0.3-0.277,0.587-0.569,0.876-0.857c0.579-0.577,1.155-1.157,1.733-1.735
                                            c0.63-0.63,1.262-1.259,1.892-1.889c0.682-0.682,1.362-1.365,2.043-2.048c0.688-0.688,1.376-1.378,2.068-2.062
                                            c0.043-0.043,0.128-0.071,0.19-0.066c0.476,0.037,0.944,0.016,1.41-0.102c0.868-0.219,1.585-0.677,2.147-1.367
                                            c0.465-0.57,0.753-1.226,0.852-1.959c0.046-0.347,0.074-0.697-0.002-1.042c-0.067-0.313-0.37-0.477-0.652-0.351
                                            c-0.116,0.051-0.23,0.122-0.32,0.209C15.71,3.96,15.21,4.461,14.711,4.962c-0.37,0.371-0.885,0.416-1.274,0.07
                                            c-0.354-0.313-0.674-0.663-1.012-0.993c-0.381-0.37-0.417-0.953,0.024-1.386c0.223-0.219,0.444-0.438,0.665-0.66
                                            c0.304-0.307,0.613-0.608,0.909-0.922c0.159-0.169,0.26-0.374,0.188-0.616c-0.075-0.255-0.284-0.361-0.524-0.38
                                            c-0.305-0.023-0.618-0.041-0.92-0.008c-0.859,0.096-1.619,0.432-2.264,1.015c-0.52,0.469-0.892,1.034-1.115,1.696
                                            c-0.214,0.635-0.259,1.285-0.16,1.947c0.006,0.042-0.013,0.101-0.041,0.132C9.093,4.964,8.989,5.062,8.888,5.162
                                            C8.206,5.843,7.521,6.523,6.839,7.206c-0.681,0.682-1.36,1.367-2.042,2.049c-0.682,0.682-1.366,1.361-2.049,2.043
                                            c-0.643,0.642-1.286,1.285-1.928,1.929c-0.375,0.374-0.621,0.814-0.701,1.343c-0.186,1.228,0.552,2.345,1.756,2.657
                                            C1.976,17.253,2.078,17.279,2.18,17.304z M10.459,11.398c0.057,0.06,0.09,0.097,0.125,0.132c0.776,0.778,1.55,1.559,2.333,2.329
                                            c0.14,0.138,0.207,0.289,0.247,0.475c0.043,0.199,0.083,0.42,0.197,0.579c0.185,0.258,0.401,0.511,0.652,0.701
                                            c0.497,0.376,1.024,0.714,1.546,1.057c0.292,0.191,0.593,0.369,0.938,0.455c0.122,0.03,0.222,0.019,0.31-0.083
                                            c0.074-0.087,0.157-0.167,0.244-0.243c0.091-0.079,0.124-0.175,0.085-0.284c-0.065-0.19-0.114-0.394-0.218-0.562
                                            c-0.373-0.601-0.758-1.193-1.155-1.779c-0.241-0.355-0.529-0.68-0.921-0.872c-0.206-0.101-0.447-0.129-0.67-0.195
                                            c-0.064-0.019-0.136-0.042-0.182-0.086c-0.477-0.471-0.948-0.948-1.422-1.422c-0.357-0.358-0.713-0.716-1.073-1.069
                                            c-0.025-0.024-0.102-0.036-0.122-0.017C11.068,10.803,10.768,11.098,10.459,11.398z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.18,17.304c-0.102-0.025-0.204-0.051-0.306-0.077
                                            c-1.204-0.312-1.941-1.429-1.756-2.657c0.08-0.529,0.327-0.969,0.701-1.343c0.642-0.644,1.285-1.287,1.928-1.929
                                            c0.683-0.682,1.367-1.362,2.049-2.043c0.682-0.682,1.361-1.367,2.042-2.049c0.682-0.683,1.366-1.363,2.049-2.043
                                            c0.101-0.101,0.205-0.198,0.299-0.305c0.028-0.031,0.047-0.09,0.041-0.132c-0.1-0.662-0.055-1.312,0.16-1.947
                                            c0.224-0.662,0.596-1.227,1.115-1.696c0.645-0.583,1.404-0.918,2.264-1.015c0.303-0.033,0.615-0.015,0.92,0.008
                                            c0.24,0.019,0.449,0.125,0.524,0.38c0.072,0.242-0.029,0.447-0.188,0.616c-0.296,0.314-0.605,0.616-0.909,0.922
                                            c-0.221,0.221-0.442,0.441-0.665,0.66c-0.44,0.433-0.405,1.016-0.024,1.386c0.338,0.33,0.659,0.68,1.012,0.993
                                            c0.389,0.346,0.904,0.301,1.274-0.07c0.5-0.501,1-1.002,1.505-1.497c0.09-0.088,0.205-0.159,0.32-0.209
                                            c0.282-0.126,0.585,0.038,0.652,0.351c0.076,0.346,0.048,0.695,0.002,1.042c-0.099,0.733-0.387,1.389-0.852,1.959
                                            c-0.562,0.69-1.279,1.148-2.147,1.367c-0.465,0.118-0.934,0.139-1.41,0.102c-0.063-0.005-0.147,0.023-0.19,0.066
                                            c-0.692,0.684-1.38,1.374-2.068,2.062c-0.681,0.683-1.361,1.366-2.043,2.048c-0.629,0.63-1.261,1.258-1.892,1.889
                                            c-0.578,0.578-1.154,1.158-1.733,1.735c-0.289,0.288-0.576,0.58-0.876,0.857c-0.315,0.292-0.7,0.449-1.119,0.532
                                            c-0.043,0.009-0.085,0.024-0.128,0.038C2.548,17.304,2.364,17.304,2.18,17.304z M2.535,13.209c-0.913-0.038-1.723,0.72-1.727,1.661
                                            c-0.003,0.922,0.696,1.677,1.664,1.708c0.907,0.029,1.688-0.722,1.718-1.654C4.22,14.013,3.479,13.247,2.535,13.209z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.847,5.028C7.634,5.236,5.258,7.653,5.049,7.872
                                            c-0.332-0.337-0.635-0.65-0.943-0.959C3.373,6.177,2.637,5.445,1.904,4.71C1.447,4.251,0.977,3.804,0.541,3.327
                                            C-0.242,2.469-0.085,1.1,0.854,0.42c0.689-0.499,1.574-0.535,2.273-0.059c0.248,0.169,0.456,0.397,0.671,0.61
                                            c0.744,0.737,1.482,1.48,2.222,2.221c0.594,0.595,1.188,1.19,1.781,1.785C7.818,4.993,7.832,5.01,7.847,5.028z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.459,11.398c0.308-0.3,0.608-0.595,0.916-0.884
                                            c0.02-0.019,0.097-0.007,0.122,0.017c0.36,0.353,0.716,0.711,1.073,1.069c0.474,0.474,0.945,0.951,1.422,1.422
                                            c0.046,0.044,0.117,0.068,0.182,0.086c0.224,0.066,0.464,0.094,0.67,0.195c0.392,0.191,0.68,0.516,0.921,0.872
                                            c0.396,0.585,0.782,1.178,1.155,1.779c0.104,0.167,0.153,0.371,0.218,0.562c0.038,0.109,0.005,0.205-0.085,0.284
                                            c-0.087,0.076-0.169,0.156-0.244,0.243c-0.088,0.103-0.188,0.114-0.31,0.083c-0.345-0.086-0.646-0.264-0.938-0.455
                                            c-0.522-0.343-1.049-0.681-1.546-1.057c-0.251-0.19-0.468-0.443-0.652-0.701c-0.114-0.159-0.154-0.379-0.197-0.579
                                            c-0.04-0.186-0.106-0.336-0.247-0.475c-0.783-0.771-1.557-1.551-2.333-2.329C10.549,11.495,10.516,11.458,10.459,11.398z"/>
                                    </g>
                                    </svg>
                                </div>
                                <span class="navtext">Panel administracyjny</span>
                            </a>
                            <a href="{{route('logout')}}" class="navlabel" tabindex="9">
                                <div class="navicon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="17.27px" height="19.414px" viewBox="0 0 17.27 19.414" enable-background="new 0 0 17.27 19.414" xml:space="preserve">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.847,11.6c-0.077,0-0.14,0-0.204,0c-1.175,0-3.568,0-4.743-0.001
                                        c-0.473,0-0.72-0.242-0.721-0.707c-0.001-0.786-0.001-1.572,0-2.357C6.18,8.06,6.425,7.822,6.91,7.822c1.169,0,3.556,0,4.727,0
                                        c0.064,0,0.128,0,0.219,0c0-0.074,0-0.136,0-0.198c0.004-0.523,0.001-1.047,0.015-1.57c0.006-0.264,0.146-0.442,0.363-0.461
                                        c0.102-0.008,0.237,0.016,0.311,0.08c1.545,1.317,3.084,2.641,4.625,3.963c0.024,0.021,0.055,0.034,0.101,0.062
                                        c-0.161,0.139-0.294,0.253-0.427,0.368c-1.418,1.218-2.836,2.436-4.254,3.654c-0.214,0.185-0.548,0.119-0.652-0.148
                                        c-0.056-0.145-0.075-0.311-0.078-0.468c-0.011-0.438-0.004-0.876-0.004-1.315C11.854,11.73,11.85,11.672,11.847,11.6z"/>
                                    <path d="M0.779,18.855c0.318,0.277,0.688,0.451,1.106,0.519c0.043,0.007,0.083,0.025,0.124,0.04c3.686,0,7.37,0,11.055,0
                                        c0.021-0.012,0.042-0.029,0.065-0.033c1.192-0.225,1.92-1.087,1.922-2.283c0.001-0.705,0-1.409,0-2.113h-1.889
                                        c0,0.519,0,1.038,0,1.583c0,0.536-0.285,0.816-0.829,0.816c-3.202,0-6.403,0-9.605,0c-0.551,0-0.827-0.271-0.827-0.811
                                        c-0.001-4.578-0.001-9.155,0-13.733c0-0.54,0.276-0.811,0.827-0.811c3.202,0,6.403,0,9.605,0c0.544,0,0.829,0.28,0.829,0.816
                                        c0,0.51,0,1.235,0,1.858h1.887c0.002-0.84,0.005-1.68-0.002-2.52c-0.008-0.988-0.712-1.858-1.676-2.104
                                        C13.271,0.054,13.168,0.027,13.065,0C9.38,0,5.695,0,2.01,0C1.925,0.021,1.84,0.044,1.755,0.065
                                        C0.671,0.328,0.004,1.194,0.002,2.361C0,4.566,0.001,6.771,0.001,8.977c0,2.679,0.003,5.359-0.001,8.038
                                        C-0.001,17.742,0.22,18.368,0.779,18.855z"/>
                                    </svg>
                                </div>
                                <span class="navtext">Logout</span>
                            </a>
                    @endif
                </div>
            </nav>
        @yield('body')
    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>