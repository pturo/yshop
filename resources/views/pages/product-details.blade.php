@extends('layouts.app')
@section('content')
    <div class="row">
        <section class="reveal">
            <h1>Yproduct details</h1>
            <div class="product-details">
                <div class="product-base-info">
                    <div class="product-img">
                        <img src="{{ asset('img/yplaceholder.png') }}" alt="yplaceholder" width="250" height="250">
                    </div>
                    <div class="product-info">
                        <h1>Yproduct</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dolore libero obcaecati nulla aliquam mollitia, provident,
                            cum nobis accusamus sit quo id officia ab fugit laborum sapiente
                            delectus ea atque? Aut.
                        </p>
                        <p>Size: M</p>
                        <p>Color: black</p>
                        <p>Other attributes</p>
                    </div>
                </div>
                <div class="product-description">
                    <h1>Ydescription</h1>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Repudiandae qui voluptas inventore veniam excepturi, soluta
                        unde error rem ea modi omnis, facere fuga, illo voluptates.
                        Consectetur voluptatum nesciunt facilis qui!
                    </p>
                </div>
            </div>
            <div class="product-reviews">
                <h1>Yreviews</h1>
                <div class="customer-review">
                    <div class="profile">
                        <img src="{{ asset('img/yprofile.png') }}" alt="yprofile" width="50" height="50">
                        <h6>Name: Jiří Kolanko</h6>
                        <p>From: Czech Republic <span class="fi fi-cz"></p>
                        <p>Reviews: 20</p>
                    </div>
                    <div class="review">
                        <div class="review-score">
                            <span>Review score: &starf; &starf; &starf; &starf; &starf;</span>
                        </div>
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aliquam dolores ut est iure porro optio sint itaque neque,
                                quos culpa quisquam quibusdam architecto officia distinctio!
                                Magni ducimus incidunt tenetur harum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="customer-review">
                    <div class="profile">
                        <img src="{{ asset('img/yprofile.png') }}" alt="yprofile" width="50" height="50">
                        <h6>Name: Amanda Cherry</h6>
                        <p>From: USA <span class="fi fi-us"></p>
                        <p>Reviews: 225</p>
                    </div>
                    <div class="review">
                        <div class="review-score">
                            <span>Review score: &starf; &starf; &starf; &star; &star;</span>
                        </div>
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aliquam dolores ut est iure porro optio sint itaque neque,
                                quos culpa quisquam quibusdam architecto officia distinctio!
                                Magni ducimus incidunt tenetur harum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="customer-review">
                    <div class="profile">
                        <img src="{{ asset('img/yprofile.png') }}" alt="yprofile" width="50" height="50">
                        <h6>Name: Grzegorz Pączek</h6>
                        <p>From: Poland <span class="fi fi-pl"></p>
                        <p>Reviews: 76</p>
                    </div>
                    <div class="review">
                        <div class="review-score">
                            <span>Review score: &starf; &starf; &starf; &starf; &star;</span>
                        </div>
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aliquam dolores ut est iure porro optio sint itaque neque,
                                quos culpa quisquam quibusdam architecto officia distinctio!
                                Magni ducimus incidunt tenetur harum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
