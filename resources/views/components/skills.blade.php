<section id="skills" class="skills section-bg" data-aos="fade-right">
    <div class="container">

        <div class="section-title">
            <h2>Skills</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">
            @foreach ($skills as $skill)
                <div class="card col-1 m-3 rotate-center" data-aos="flip-left" style="width: 5rem;">
                    <img src="{{ asset('upload/skills/' . $skill->path) }} " class="img-fluid my-3 mx-auto"
                        style="width: 2rem;" alt="{{ $skill->path }}">
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Skills Section -->
