import React, { useEffect, useState } from 'react';
import './ImageSlider.css';

function ImageSlider (){
    let windowSize = 2;
    let images = [2,3,0,1,2,3,0,1].map((item,index)=>{
       return (
           <div className="imgs" key={index}>
               <img  src={require(`../assets/images/${item}.jpg`)}></img>
               <span>{item}</span>
           </div>
       )
    })
    let imgPtr = -2;
    
    useEffect(()=>{
        let container = document.querySelector('#sliderContainer');
        container.style.transition = 'none';
        container.style.transform = `translate(${imgPtr * 360}px,0)`;
        console.log(imgPtr);
        setInterval(() => {
            handleNextClick();
        }, 1500);
    });

    let handleNextClick = ()=>{
        if(imgPtr >= 0) return;
        let container = document.querySelector('#sliderContainer');
        // console.log(container);
        imgPtr++;
        container.style.transition = 'transform 0.4s ease-in-out';
        container.style.transform = `translate(${imgPtr * 360}px,0)`;
        console.log(imgPtr);
    }


    let handlPreviousClick = ()=>{
        if(imgPtr <= -6) return;
        let container = document.querySelector('#sliderContainer');
        // console.log(container);
        imgPtr--;
        container.style.transition = 'transform 0.4s ease-in-out';
        container.style.transform = `translate(${imgPtr * 360}px,0)`;
        console.log(imgPtr);
    }
    let handleTransition = ()=>{
        if(imgPtr === 0){
            // console.log('move to ', )
            let container = document.querySelector('#sliderContainer');
            imgPtr = -1 * (windowSize + (4-windowSize));
            container.style.transition = 'none';
            container.style.transform = `translate(${imgPtr * 360}px,0)`;
            console.log(imgPtr);
        }

        if(imgPtr == -6){
            let container = document.querySelector('#sliderContainer');
            imgPtr = -1 *windowSize;
            container.style.transition = 'none';
            container.style.transform = `translate(${imgPtr * 360}px,0)`;
            console.log(imgPtr);
        }
    }
    return (

        <div>
            <div id="sliderWindow">
                <div id="sliderContainer" onTransitionEnd={handleTransition}>
                    {images}
                </div>
            
            </div>

            
            <button  onClick={handlPreviousClick}>previous</button>
            <button  onClick={handleNextClick}>next</button>
        </div>
        
    )

}

export default ImageSlider;