$ ->
  $loading = $ "#loading"
  $errJSON = $ '#errJSON'
  getFacebook = (id)->
    fbid = id
    $.ajax
      'url': 'http://graph.facebook.com/'
      'method': 'get'
      'data':
        'id': fbid
      'beforeSend': ->
        $loading.css 'opacity', 1 #loading opacity  100%
        $errJSON.css 'opacity', 0
        clearFacebookInfo()
    .fail (err)->            #error
        $errJSON.css 'opacity',
          $errJSON
          .html err.responseText
        $loading.css 'opacity', 0
    .success (data)->
        $ "#firstname"#input data
        .html data.first_name
        $ "#lastname"
        .html data.last_name
        $ "#gender"
        .html data.gender
        $loading.css 'opacity', 0 #loading opacity 0%
        $errJSON.css 'opacity', 0

  $ '.form-control'#form for typing input
  .on "input", ->
      getFacebook($(this).val()) #call function have to use (): val()

  clearFacebookInfo = ->           #before send clear
    items = ["#firstname", "#lastname", "#gender"] #clear 3 item
    for item in items               #for loop
      $(item).html ""