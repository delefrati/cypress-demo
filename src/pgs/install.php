<h3 class="top-50">As an npm package:</h3>
<code class="center">npm install cypress <a id="more-npm" class="fa fa-question-circle"></a> </code>
<div id="more-npm-extra" style="display: none">
    <p>Actually it is a little more complicated than that, specially for Docker.
        Some things some times break, there are some scripts that can be used to
        verify if the installation worked among some other small tweaks that make
        it easier to run with Jenkins.
    </p>
    <p>
        If you want an example of configuration, check the Dockerfile that is part
        of this project.
    </p>

</div>


<h3 class="top-50">Direct download</h3>
<p class="center">
    <a rel="noreferrer" target="_blank" href="https://download.cypress.io/desktop">https://download.cypress.io/desktop</a>
</p>

<script>
    $('#more-npm').click(function (){
      $('#more-npm-extra').toggle();
    });
</script>