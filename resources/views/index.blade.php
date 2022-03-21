<x-layout>
    <h1>Comments</h1>
    <ul>
        <li>
            <a href="#candy">Candy Comments</a>
        </li>
        <li>
            <a href="#call">Call Comments</a>
        </li>
        <li>
            <a href="#refer">Refferal Comments</a>
        </li>
        <li>
            <a href="#sig">Signature Comments</a>
        </li>
        <li>
            <a href="#misc">Miscellaneous Comments</a>
        </li>

    </ul>
<h2 id="candy">Candy Comments</h2>
<x-comments :comments="$candyComments" />
<h2 id="call">Call Comments</h2>
<x-comments :comments="$callComments" />
<h2 id="refer">Refferal Comments</h2>
<x-comments :comments="$referComments" />
<h2 id="sig">Signature Comment</h2>
<x-comments :comments="$signatureComments" />
<h2 id="misc">Miscellaneous Comments</h2>
<x-comments :comments="$miscComments" />

</x-layout>