<div class="chatbot chatbot--closed">
  <div class="chatbot__header">
    <p><strong>Got a question?</strong> <span class="u-text-highlight">Ask Harry</span></p>
    <svg class="chatbot__close-button icon-speech" viewBox="0 0 32 32">
      <use xlink:href="#icon-speech" />
    </svg>
    <svg class="chatbot__close-button icon-close" viewBox="0 0 32 32">
      <use xlink:href="#icon-close" />
    </svg>
  </div>
  <div class="chatbot__message-window">
    <ul class="chatbot__messages">
      <li class="is-ai animation">
        <div class="is-ai__profile-picture">
          <svg class="icon-avatar" viewBox="0 0 32 32">
            <use xlink:href="#avatar" />
          </svg>
        </div>
        <span class="chatbot__arrow chatbot__arrow--left"></span>
        <p class='chatbot__message'>Hi there 🖐. I’m Harry, your virtual assistant. I'm here to help with your general enquiries.</p>
      </li>
      <!-- Answer and response added here -->
    </ul>
  </div>
  <div class="chatbot__entry chatbot--closed">
    <input type="text" class="chatbot__input" placeholder="Write a message..." />
    <svg class="chatbot__submit" viewBox="0 0 32 32">
      <use xlink:href="#icon-send" />
    </svg>
  </div>
</div>

<!-- Symbols -->
<svg>
  <!-- Close icon -->
  <symbol id="icon-close" viewBox="0 0 32 32">
    <title>Close</title>
    <path d="M2.624 8.297l2.963-2.963 23.704 23.704-2.963 2.963-23.704-23.704z" />
    <path d="M2.624 29.037l23.704-23.704 2.963 2.963-23.704 23.704-2.963-2.963z" />
  </symbol>

  <!-- Speech icon -->
  <symbol id="icon-speech" viewBox="0 0 32 32">
    <title>Speech</title>
    <path d="M21.795 5.333h-11.413c-0.038 0-0.077 0-0.114 0l-0.134 0.011v2.796c0.143-0.006 0.273-0.009 0.385-0.009h11.277c0.070 0 7.074 0.213 7.074 7.695 0 5.179-2.956 7.695-9.036 7.695h-3.792c-0.691 0-1.12 0.526-1.38 1.159l-1.387 3.093-1.625 3.77 0.245 0.453h2.56l2.538-5.678h2.837c7.633 0 11.84-3.727 11.84-10.494 0.001-8.564-7.313-10.492-9.875-10.492z" />
    <path d="M10.912 24.259c-0.242-0.442-0.703-0.737-1.234-0.737-0 0-0 0-0 0h-0.56c-0.599-0.011-1.171-0.108-1.71-0.28l0.042 0.012c-1.82-0.559-4.427-2.26-4.427-7.424 0-6.683 5.024-7.597 7.109-7.686v-2.8c-2.042 0.095-9.91 1.067-9.91 10.483 0 4.832 1.961 7.367 3.606 8.64 1.38 1.067 3.109 1.744 4.991 1.843l0.033 0.019 2.805 5.211 1.41-3.273z" />
  </symbol>

  <!-- Send icon -->
  <symbol id="icon-send" viewBox="0 0 23.97 21.9">
    <title>Send</title>
    <path d="M0.31,9.43a0.5,0.5,0,0,0,0,.93l8.3,3.23L23.15,0Z"/>
    <path d="M9,14.6H9V21.4a0.5,0.5,0,0,0,.93.25L13.22,16l6,3.32A0.5,0.5,0,0,0,20,19l4-18.4Z"/>
  </symbol>
  
  <!-- Avatar icon -->
  <symbol id="avatar" width="32" height="32" viewBox="0 0 44.25 44">
    <title>Avatar</title>
    <path style="fill: #7226e0; fill-rule: evenodd;" d="M1035.88,1696.25a22,22,0,1,1-22.13,22A22.065,22.065,0,0,1,1035.88,1696.25Z" transform="translate(-1013.75 -1696.25)"/>
    <path style="fill: #fff; fill-rule: evenodd;" d="M1030.18,1725.16h2.35a0.335,0.335,0,0,0,.34-0.33v-5.23h5.94v5.23a0.342,0.342,0,0,0,.34.33h2.36a0.342,0.342,0,0,0,.34-0.33v-12.36a0.34,0.34,0,0,0-.34-0.32h-2.36a0.34,0.34,0,0,0-.34.32v4.51h-5.94v-4.51a0.333,0.333,0,0,0-.34-0.32h-2.35a0.333,0.333,0,0,0-.34.32v12.36a0.335,0.335,0,0,0,.34.33" transform="translate(-1013.75 -1696.25)"/>
  </symbol>
  
</svg>
    
<style>

$port-gore: #292460;
$gallery: #f0f0f0;
$white: #fff;
$riptide: #7ee0d2;
$gray: #7f7f7f;
$athens-gray: #e6eaee;
$purple-heart: #7226e0;

$chat-height: 380px;
$chat-max-width: 420px;
$chat-distance-to-window: 80px;
$chat-padding: 20px;
$header-height: 54px;
$entry-height: 60px;
  
.chatbot {
  position: fixed;
  top: 0;
  bottom: 0;
  width: 100%;
  box-shadow: 0 -6px 99px -17px rgba(0, 0, 0, 0.68);

  @media screen and (min-width: 640px) {
    max-width: $chat-max-width;
    right: $chat-distance-to-window;
    top: auto;
  }

  &.chatbot--closed {
    top: auto;
    width: 100%;
  }
}

.chatbot__header {
  color: $white;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: $port-gore;
  height: $header-height;
  padding: 0 $chat-padding;
  width: 100%;
  cursor: pointer;
  transition: background-color 0.2s ease;

  &:hover {
    background-color: lighten($port-gore, 10%)
  }

  p {
    margin-right: $chat-padding;
  }
}

.chatbot__close-button {
  fill: $white;

  &.icon-speech {
    width: 20px;
    display: none;

    .chatbot--closed & {
      display: block;
    }
  }

  &.icon-close {
    width: 14px;

    .chatbot--closed & {
      display: none;
    }
  }
}

.chatbot__message-window {
  height: calc(100% - (#{$header-height} + #{$entry-height}));
  padding: ($chat-padding * 2) $chat-padding $chat-padding;
  background-color: $white;
  overflow-x: none;
  overflow-y: auto;
  
  @media screen and (min-width: 640px) {
    height: $chat-height;
  }
  
  &::-webkit-scrollbar { 
    display: none; 
  }

  .chatbot--closed & {
    display: none;
  }
}

.chatbot__messages {
  padding: 0;
  margin: 0;
  list-style: none;
  display: flex;
  flex-direction: column;
  width: auto;

  li {
    margin-bottom: $chat-padding;

    &.is-ai {
      display: inline-flex;
      align-items: flex-start;
    }

    &.is-user {
      text-align: right;
      display: inline-flex;
      align-self: flex-end;
    }

    .is-ai__profile-picture {
      margin-right: 8px;
      
      .icon-avatar {
        width: 40px;
        height: 40px;
        padding-top: 6px;
      }
      
    }
  }
}

.chatbot__message {
  display: inline-block;
  padding: 12px $chat-padding;
  word-break: break-word;
  margin: 0;
  border-radius: 6px;
  letter-spacing: -0.01em;
  line-height: 1.45;
  overflow: hidden;

  .is-ai & {
    background-color: $gallery;
    margin-right: $chat-padding * 1.5;
  }

  .is-user & {
    background-color: $riptide;
    margin-left: $chat-padding * 1.5;
  }
  
  a {
    color: $purple-heart;
    word-break: break-all;
    display: inline-block;
  }
  
  p:first-child {
    margin-top: 0;
  }
  
  p:last-child {
    margin-bottom: 0;
  }
  
  button{
    background-color: $white;
    font-weight: 300;
    border: 2px solid $purple-heart;
    border-radius: 50px;
    padding: 8px 20px;
    margin: -8px 10px 18px 0;
    transition: background-color 0.2s ease;
    cursor: pointer;
    
    &:hover{
      background-color: darken($white, 05%);
    }
    &:focus {
      outline: none;
    }
  }
  
img {
    max-width: 100%;
  }
  
  .card {
    background-color: $white;
    text-decoration: none;
    overflow: hidden;
    border-radius: 6px;
    color: black;
    word-break: normal;
    
    .card-content {
      padding: $chat-padding;
    }
    
    .card-title {
      margin-top: 0;
    }
    
    .card-button {
      color: $purple-heart;
      text-decoration: underline;
    }
  }
  
}

.animation{
  &:last-child {
    animation: fadein .25s;
    animation-timing-function: all 200ms cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }
}

.chatbot__arrow {
  width: 0;
  height: 0;
  margin-top: 18px;
}

.chatbot__arrow--right {
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
  border-left: 6px solid $riptide;
}

.chatbot__arrow--left {
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
  border-right: 6px solid $gallery;
}

.chatbot__entry {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: $entry-height;
  padding: 0 $chat-padding;
  border-top: 1px solid $athens-gray;
  background-color: $white;

  .chatbot--closed & {
    display: none;
  }
}

.chatbot__input {
  height: 100%;
  width: 80%;
  border: 0;

  &:focus {
    outline: none;
  }
  &::-webkit-input-placeholder {
    color: $gray;
  }
  &::-moz-placeholder {
    color: $gray;
  }
  &::-ms-input-placeholder {
    color: $gray;
  }
  &::-moz-placeholder {
    color: $gray;
  }
}

.chatbot__submit {
  fill: $purple-heart;
  height: 22px;
  width: 22px;
  transition: fill 0.2s ease;
  cursor: pointer;
  &:hover {
    fill: darken($purple-heart, 20%)
  }
}

.u-text-highlight {
  color: $riptide;
}

//Animated Loader 
//----------------
.loader {
  margin-bottom: -2px;
  text-align: center;
  opacity: .3;
}

.loader__dot {
  display: inline-block;
  vertical-align: middle;
  width: 6px;
  height: 6px;
  margin: 0 1px;
  background: black;
  border-radius: 50px;
  animation: loader 0.45s infinite alternate;
  &:nth-of-type(2) {
    animation-delay: .15s;
  }
  &:nth-of-type(3) {
    animation-delay: .35s;
  }
}

// KeyFrames
@keyframes loader {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-5px);
  }
}

@keyframes fadein {
  from { 
    opacity: 0;
    margin-top: 10px;
    margin-bottom: 0;
  }
  to   { 
    opacity: 1;
    margin-top: 0;
    margin-bottom: 10px;
  }
}

// --------------------------
//
// Presentational styles
//
// Not critical to chatbot example 
//
// --------------------------
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,600');

* {
  box-sizing: border-box;
}

body {
  background: url("https://images.unsplash.com/photo-1464823063530-08f10ed1a2dd?dpr=1&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=&bg=") no-repeat center center;
  background-size: cover;
  height: 1000px;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
}

input {
  font-family: 'Open Sans', sans-serif;
}

strong {
  font-weight: 600;
}


.intro {
   display: block;
   margin-bottom: 20px;
}
</style>

<script>
const accessToken = '3796899bd37c423bad3a21a25277bce0'
const baseUrl = 'https://api.api.ai/api/query?v=2015091001'
const sessionId = '20150910';
const loader = `<span class='loader'><span class='loader__dot'></span><span class='loader__dot'></span><span class='loader__dot'></span></span>`
const errorMessage = 'My apologies, I\'m not avail at the moment, however, feel free to call our support team directly 0123456789.'
const urlPattern = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim
const $document = document
const $chatbot = $document.querySelector('.chatbot')
const $chatbotMessageWindow = $document.querySelector('.chatbot__message-window')
const $chatbotHeader = $document.querySelector('.chatbot__header')
const $chatbotMessages = $document.querySelector('.chatbot__messages')
const $chatbotInput = $document.querySelector('.chatbot__input')
const $chatbotSubmit = $document.querySelector('.chatbot__submit')

const botLoadingDelay = 1000
const botReplyDelay = 2000

document.addEventListener('keypress', event => {
  if (event.which == 13) validateMessage()
}, false)

$chatbotHeader.addEventListener('click', () => {
  toggle($chatbot, 'chatbot--closed')
  $chatbotInput.focus()
}, false)

$chatbotSubmit.addEventListener('click', () => {
  validateMessage()
}, false)

const toggle = (element, klass) => {
  const classes = element.className.match(/\S+/g) || [],
    index = classes.indexOf(klass)
  index >= 0 ? classes.splice(index, 1) : classes.push(klass)
  element.className = classes.join(' ')
}

const userMessage = content => {
  $chatbotMessages.innerHTML += `<li class='is-user animation'>
      <p class='chatbot__message'>
        ${content}
      </p>
      <span class='chatbot__arrow chatbot__arrow--right'></span>
    </li>`
}

const aiMessage = (content, isLoading = false, delay = 0) => {
  setTimeout(() => {
    removeLoader()
    $chatbotMessages.innerHTML += `<li 
      class='is-ai animation' 
      id='${isLoading ? "is-loading" : ""}'>
        <div class="is-ai__profile-picture">
          <svg class="icon-avatar" viewBox="0 0 32 32">
            <use xlink:href="#avatar" />
          </svg>
        </div>
        <span class='chatbot__arrow chatbot__arrow--left'></span>
        <div class='chatbot__message'>${content}</div>
      </li>`
    scrollDown()
  }, delay)
}

const removeLoader = () => {
  let loadingElem = document.getElementById('is-loading')
  if (loadingElem) $chatbotMessages.removeChild(loadingElem)
}

const escapeScript = unsafe => {
  const safeString = unsafe
    .replace(/</g, ' ')
    .replace(/>/g, ' ')
    .replace(/&/g, ' ')
    .replace(/"/g, ' ')
    .replace(/\\/, ' ')
    .replace(/\s+/g, ' ')
  return safeString.trim()
}

const linkify = inputText => {
  return inputText.replace(urlPattern, `<a href='$1' target='_blank'>$1</a>`)
}

const validateMessage = () => {
  const text = $chatbotInput.value
  const safeText = text ? escapeScript(text) : ''
  if (safeText.length && safeText !== ' ') {
    resetInputField()
    userMessage(safeText)
    send(safeText)
  }
  scrollDown()
  return
}

const multiChoiceAnswer = text => {
  const decodedText = text.replace(/zzz/g, "'")
  userMessage(decodedText)
  send(decodedText)
  scrollDown()
  return
}

const processResponse = val => {
  if (val && val.fulfillment) {
    let output = ''
    let messagesLength = val.fulfillment.messages.length

    for (let i = 0; i < messagesLength; i++) {
      let message = val.fulfillment.messages[i]
      let type = message.type

      switch (type) {
        // 0 fulfillment is text
        case 0:
          let parsedText = linkify(message.speech)
          output += `<p>${parsedText}</p>`
          break

        // 1 fulfillment is card
        case 1:
          let imageUrl = message.imageUrl
          let imageTitle = message.title
          let imageSubtitle = message.subtitle
          let button = message.buttons[0]
          
          if(!imageUrl && !button && !imageTitle && !imageSubtitle) break

          output += `
            <a class='card' href='${button.postback}' target='_blank'>
              <img src='${imageUrl}' alt='${imageTitle}' />
            <div class='card-content'>
              <h4 class='card-title'>${imageTitle}</h4>
              <p class='card-title'>${imageSubtitle}</p>
              <span class='card-button'>${button.text}</span>
            </div>
            </a>
          `
          break

        // 2 fulfillment is a quick reply with multi-choice buttons
        case 2:
          let title = message.title
          let replies = message.replies
          let repliesLength = replies.length
          output += `<p>${title}</p>`

          for (let i = 0; i < repliesLength; i++) {
            let reply = replies[i]
            let encodedText = reply.replace(/'/g, 'zzz')
            output += `<button onclick='multiChoiceAnswer("${encodedText}")'>${reply}</button>`
          }
          break
      }
    }
    
    removeLoader()
    return output
  }

  removeLoader()
  return `<p>${errorMessage}</p>`
}

const setResponse = (val, delay = 0) => {
  setTimeout(() => {
    aiMessage(processResponse(val))
  }, delay)
}

const resetInputField = () => {
  $chatbotInput.value = ''
}

const scrollDown = () => {
  const distanceToScroll =
    $chatbotMessageWindow.scrollHeight -
    ($chatbotMessages.lastChild.offsetHeight + 60)
  $chatbotMessageWindow.scrollTop = distanceToScroll
  return false
}

const send = (text = '') => {
  fetch(`${baseUrl}&query=${text}&lang=en&sessionId=${sessionId}`, {
    method: 'GET',
    dataType: 'json',
    headers: {
      Authorization: 'Bearer ' + accessToken,
      'Content-Type': 'application/json; charset=utf-8'
    }
  })
  .then(response => response.json())
  .then(res => {
    if (res.status < 200 || res.status >= 300) {
      let error = new Error(res.statusText)
      throw error
    }
    return res
  })
  .then(res => {
    setResponse(res.result, botLoadingDelay + botReplyDelay)
  })
  .catch(error => {
    setResponse(errorMessage, botLoadingDelay + botReplyDelay)
    resetInputField()
    console.log(error)
  })

  aiMessage(loader, true, botLoadingDelay)
}
</script>