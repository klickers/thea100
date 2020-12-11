@extends('layouts.app')

@section('title', 'Genres')

@section('content')
    <main id="genres" class="content">
        <!-- Genres Introduction -->
        <div class="bucket">
            <div class="bucket-label">
                <h1>Genres</h1>
                <strong>from September 10, 2020</strong>
            </div>
            <div class="bucket-content">
                <p>There are so many different types &mdash; <em>genres</em> &mdash; of plays out there.</p>
                <p>In the beginning of Western theater in Greece, plays belonged to one of three genres: comedy, tragedy, or satyr.  
                    (Aristotle covers tragedy in <em>Poetics</em>.)  
                    Back then, tragedies centered around figures and concepts from Greek history and mythology, as well as present events, while comedies focused on the current issues of the day.</p>
                <p>Over the years, more genres emerged.  Thanks to my best friend Richard, who made me watch the entire <em>Crash Course: Theater</em> series with him when he heard I was taking <em>Introduction to Theater</em> this semester, I am at least somewhat familiar with most of them.</p>
                <a target="_blank" href="https://thecrashcourse.com/courses/theaterdrama">
                    <div class="cta">
                        <div class="cta-icon">
                            <i data-feather="external-link"></i>
                        </div>
                        <div class="cta-content">
                            <p><strong>Crash Course Theater</strong></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Tragedy -->
        <div class="bucket">
            <div class="bucket-label">
                <h2>Tragedy</h2>
                <strong>from now</strong>
            </div>
            <div class="bucket-content">
                <p>Richard didn't make me watch any actual Greek tragic or comedic plays, and so the only one I'm remotely familiar with is <em>Oedipus Rex</em>, 
                    and even then, I've only read <em>Oedipus the King</em> as a requirement for <em>World Literature I</em>.</p>
                <p>Anyhow, <em>Oedipus</em> is a prime example of a Greek tragedy.  
                    Aristotle actually mentions it in his <em>Poetics</em> as a perfect tragedy &mdash; one that contains all the essential elements of a tragedy.</p>
                <!-- HTML Canvas Diagram of Play Structure -->
                <canvas id="canvas-play-structure" width="640" height="300"></canvas>
                <script type="text/javascript">
                    var canvas, context, canvaso, contexto;
                    canvaso = document.getElementById('canvas-play-structure');
                    context = canvaso.getContext('2d');
                    context.lineWidth = 5;

                    context.strokeStyle = '#000000';
                    context.beginPath();
                    context.moveTo(32, 245);
                    context.lineTo(150, 245);
                    context.stroke();
                    context.closePath();

                    context.strokeStyle = '#000000';
                    context.beginPath();
                    context.moveTo(150, 245);
                    context.lineTo(373, 103);
                    context.stroke();
                    context.closePath();

                    context.strokeStyle = '#000000';
                    context.beginPath();
                    context.moveTo(373, 103);
                    context.lineTo(462, 245);
                    context.stroke();
                    context.closePath();

                    context.strokeStyle = '#000000';
                    context.beginPath();
                    context.moveTo(462, 245);
                    context.lineTo(580, 245);
                    context.stroke();
                    context.closePath();

                    context.font = "1rem Nunito";
                    context.fillText("Exposition", 40, 235);
                    context.save();
                    context.translate(200, 200);
                    context.rotate(-0.19*Math.PI);
                    context.fillText("Conflict", 0, 0);
                    context.restore();
                    context.fillText("Climax", 353, 93);
                    context.fillText("Denouement", 470, 235);
                </script>
            </div>
        </div>
        <!-- Oedipus -->
        <div class="bucket">
            <div class="bucket-label">
                <h3>Oedipus</h3>
                <strong>from August 31, 2020</strong>
            </div>
            <div class="bucket-content">
                <p><em>The Oedipus Trilogy</em> was written by Sophocles, one of the three most famous Greek tragedians.  (The other two were Aeschylus and Euripides.)</p>
                <div class="notebook">
                    <p class="title">From Flip's Personal Internet Data Bank</p>
                    <p>information on Oedipus Rex:</p>
                    <a target="_blank" href="https://youtu.be/Cj7R36s4dbM">
                        <div class="cta">
                            <div class="cta-icon">
                                <i data-feather="external-link"></i>
                            </div>
                            <div class="cta-content">
                                <p><strong>Fate, Family, and Oedipus Rex:  Crash Course Video</strong></p>
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="https://www.cliffsnotes.com/literature/o/the-tragedy-trilogy/play-summary/tragedy-the-king">
                        <div class="cta">
                            <div class="cta-icon">
                                <i data-feather="external-link"></i>
                            </div>
                            <div class="cta-content">
                                <p><strong>CliffsNotes:  The Oedipus Trilogy</strong></p>
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="http://classics.mit.edu/Sophocles/tragedy.html">
                        <div class="cta">
                            <div class="cta-icon">
                                <i data-feather="external-link"></i>
                            </div>
                            <div class="cta-content">
                                <p><strong>English Version of <em>Oedipus the King</em> (Translated by F. Storr)</strong></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Other Genres -->
        <div class="bucket">
            <div class="bucket-label">
                <h2>Other Genres</h2>
                <strong>from now</strong>
            </div>
            <div class="bucket-content">
                <p>Theater today includes more genres than tragedy and comedy, although the Greeks certainly set the foundation on which Western drama is based.</p>
            </div>
        </div>
        <!-- Another Bucket -->
        <div class="bucket">
            <div class="bucket-label">
                <h3>Another Bucket</h3>
                <strong>from now</strong>
            </div>
            <div class="bucket-content">
                <p>TStuff</p>
            </div>
        </div>
        <!-- Realism -->
        <div class="bucket">
            <div class="bucket-label">
                <h3>Realism</h3>
                <strong>from November 18, 2020</strong>
            </div>
            <div class="bucket-content">
                <p>The genre of realism is exactly as it sounds &mdash; real to life, and the setting depicted in realistic plays is something ___.</p>
                <p>Henrik Ibsen is known as the "Father of Modern Drama".  One of his most well-known plays is <em>A Doll's House</em> (which I read this summer for English).</p>
                <a target="_blank" href="https://www.gutenberg.org/files/2542/2542-h/2542-h.htm">
                    <div class="cta">
                        <div class="cta-icon">
                            <i data-feather="external-link"></i>
                        </div>
                        <div class="cta-content">
                            <p><strong>A Doll's House (Project Gutenberg)</strong></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection