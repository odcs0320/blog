/****************
新增貼文
****************/
const contents = document.querySelector('#contents')
const post = document.querySelector('#post-1')
const inputName = document.querySelector('#inputName')
const inputTitle = document.querySelector('#inputTitle')
const inputText = document.querySelector('#inputText')
let no = Number(document.querySelector('.no').dataset.no) // post編號

const getDate = function () {
  const nowDate = new Date()
  const year = String(nowDate.getFullYear()).slice(2)
  const month = nowDate.getMonth() + 1
  const date = nowDate.getDate()
  const dayArray = ['日', '一', '二', '三', '四', '五', '六']
  const day = dayArray[nowDate.getDay()]
  const hour = nowDate.getHours()
  const min = nowDate.getMinutes()
  const sec = nowDate.getSeconds()
  return `${year}/${month}/${date}(${day})${hour}:${min}:${sec}`
}

const getForm = function () {
  // 從form取值
  const name = inputName.value
  const title = inputTitle.value
  const text = inputText.value

  // post編號 + 1
  no += 1

  // 創建html node
  const postClone = post.cloneNode(true)
  const hr = document.createElement('hr')
  postClone.querySelector('.checkbox').checked = false

  // 更改內容
  postClone.id = "post-" + no
  hr.classList.add(postClone.id)
  postClone.querySelector('.no').dataset.no = no
  postClone.querySelector('.no').innerHTML = 'No.' + no
  postClone.querySelector('.checkbox').value = postClone.id
  if (title === "") { }
  else { postClone.querySelector('.title').innerHTML = title }
  postClone.querySelector('.name').innerHTML = name
  postClone.querySelector('.date').innerHTML = getDate()
  postClone.querySelector('.quote').innerHTML = text
  postClone.querySelector('.post-img').classList.add('hide')
  postClone.querySelector('.vote').innerHTML = 0

  // 加入至html
  const childCount = contents.childElementCount
  if (childCount !== 0) { contents.insertBefore(hr, contents.children[0]) }
  contents.insertBefore(postClone, contents.children[0])

  // 清除form
  inputName.value = ''
  inputTitle.value = ''
  inputText.value = ''
}


/****************
刪除貼文
****************/
const delBtn = document.querySelector('#delBtn')

function checkToDel() {
  // 取得checked checkbox
  const checked = document.querySelectorAll('.checkbox:checked')
  const delList = []

  // 取得checked postID (存放於checkbox的value中)
  for (let i = 0; i < checked.length; i++) {
    delList.push(checked[i].value)
  }

  // remove元件 (id selecter為post, class selecter為hr)
  for (let i of delList) {
    // remove post
    contents.removeChild(document.getElementById(i))

    // remove hr 
    const hr = contents.querySelector(`.${i}`)  // <hr>

    // 取尾端hr
    const hrList = contents.querySelectorAll('hr')  // []
    const lastHr = hrList[hrList.length - 1]  // last <hr>

    // 無hr時打斷
    if (hrList.length === 0) continue
    // post-1沒有hr, 需往上刪除尾端hr
    if (hr === null) { contents.removeChild(lastHr) }
    else { contents.removeChild(hr) }
  }
}

delBtn.addEventListener('click', checkToDel)


/****************
圖片 & 按鈕互動
****************/
const vote = document.querySelector('.vote')
let voteValue = Number(vote.innerHTML)
const age = document.querySelector('.age')
const sage = document.querySelector('.sage')
const img = document.querySelector('.post-img')
const imgSrcClone = img.src

const ageRun = function () {
  voteValue += 1
  vote.innerHTML = voteValue
  if (voteValue >= 0) return img.classList.remove('hide')
}
const sageRun = function () {
  voteValue -= 1
  vote.innerHTML = voteValue

  if (voteValue < 0) return img.classList.add('hide')
}

age.addEventListener('click', ageRun)
sage.addEventListener('click', sageRun)