import { workerList } from "./worker-list.js";

const ourTeamWrapper = document.querySelector('.our-team-wrapper')

for (let i = 0; i < workerList.length; i++){
    const swiperSlide = document.createElement('div');
    swiperSlide.className = "swiper-slide our-team-box"
    
    const ourTeamPic = document.createElement('img');
    ourTeamPic.src = workerList[i].workersImage;
    
    const ourTeamInfo = document.createElement('div');
    ourTeamInfo.className = "our-team-info";

    const ourTeamName = document.createElement('p');
    ourTeamName.innerHTML = workerList[i].workersFullname;

    const ourTeamDirection = document.createElement('span');
    ourTeamDirection.innerHTML = workerList[i].workersJob;

    ourTeamWrapper.appendChild(swiperSlide);
    swiperSlide.appendChild(ourTeamPic);
    swiperSlide.appendChild(ourTeamInfo);
    ourTeamInfo.appendChild(ourTeamName);
    ourTeamInfo.appendChild(ourTeamDirection);
}