{% extends 'base.twig' %}

{% block body %}
<div class="be-container">
    <h3>Hello <span class='be-color-py be-code'>{{cName}}</span></h3>
    <p>
        Your <span class='be-color-py be-code'>{{cName}}</span> class is located at <span class='be-color-py be-code'>{{cPath}}</span> !
    </p>
</div>
{% endblock %}