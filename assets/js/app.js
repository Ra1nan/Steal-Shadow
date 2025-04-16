// DOM Elements
const themeToggle = document.getElementById('themeToggle');
const preview = document.getElementById('preview');
const previewContainer = document.getElementById('previewContainer');
const animationDemo = document.getElementById('animationDemo');
const helpBtn = document.getElementById('helpBtn');
const galleryBtn = document.getElementById('galleryBtn');
const helpModal = document.getElementById('helpModal');
const galleryModal = document.getElementById('galleryModal');
const closeHelpModal = document.getElementById('closeHelpModal');
const closeGalleryModal = document.getElementById('closeGalleryModal');
const exampleGallery = document.getElementById('exampleGallery');

// Code Elements
const cssSyntax = document.getElementById('cssSyntax');
const scssSyntax = document.getElementById('scssSyntax');
const tailwindSyntax = document.getElementById('tailwindSyntax');
const reactSyntax = document.getElementById('reactSyntax');
const copyCssBtn = document.getElementById('copyCssBtn');
const copyScssBtn = document.getElementById('copyScssBtn');
const copyTailwindBtn = document.getElementById('copyTailwindBtn');
const copyReactBtn = document.getElementById('copyReactBtn');

// Control Elements - Basic
const opacitySlider = document.getElementById('opacity');
const blurSlider = document.getElementById('blur');
const borderSlider = document.getElementById('border');
const radiusSlider = document.getElementById('radius');

// Control Elements - Advanced
const borderOpacitySlider = document.getElementById('borderOpacity');
const shadowSlider = document.getElementById('shadow');
const shadowBlurSlider = document.getElementById('shadowBlur');
const shadowSpreadSlider = document.getElementById('shadowSpread');

// Control Elements - Animation
const hoverScaleSlider = document.getElementById('hoverScale');
const hoverOpacitySlider = document.getElementById('hoverOpacity');
const transitionSlider = document.getElementById('transition');

// Control Elements - Colors
const bgColorPicker = document.getElementById('bgColor');
const borderColorPicker = document.getElementById('borderColor');
const shadowColorPicker = document.getElementById('shadowColor');
const bgColorHex = document.getElementById('bgColorHex');
const borderColorHex = document.getElementById('borderColorHex');
const shadowColorHex = document.getElementById('shadowColorHex');

// Animation buttons
const floatBtn = document.getElementById('floatBtn');
const pulseBtn = document.getElementById('pulseBtn');
const shakeBtn = document.getElementById('shakeBtn');

// Value displays
const opacityValue = document.getElementById('opacityValue');
const blurValue = document.getElementById('blurValue');
const borderValue = document.getElementById('borderValue');
const borderOpacityValue = document.getElementById('borderOpacityValue');
const radiusValue = document.getElementById('radiusValue');
const shadowValue = document.getElementById('shadowValue');
const shadowBlurValue = document.getElementById('shadowBlurValue');
const shadowSpreadValue = document.getElementById('shadowSpreadValue');
const hoverScaleValue = document.getElementById('hoverScaleValue');
const hoverOpacityValue = document.getElementById('hoverOpacityValue');
const transitionValue = document.getElementById('transitionValue');

// Tab switching
const controlTabs = document.querySelectorAll('.control-tab');
const tabContents = document.querySelectorAll('.tab-content');

controlTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        controlTabs.forEach(t => t.classList.remove('active'));
        tabContents.forEach(t => t.classList.remove('active'));

        tab.classList.add('active');
        document.getElementById(`${tab.dataset.tab}Tab`).classList.add('active');
    });
});

// Code tab switching
const codeTabs = document.querySelectorAll('.code-tab');
const codeContents = document.querySelectorAll('.code-content');

codeTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        codeTabs.forEach(t => t.classList.remove('active'));
        codeContents.forEach(c => c.classList.remove('active'));

        tab.classList.add('active');
        document.getElementById(`${tab.dataset.codetab}Code`).classList.add('active');
    });
});

// Theme toggle
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('light-theme');
    updatePreview();
});

// Background switcher
const bgButtons = document.querySelectorAll('.bg-btn');
bgButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const bgType = btn.dataset.bg;
        let bgImage;

        switch (bgType) {
            case 'gradient1':
                bgImage = 'linear-gradient(45deg, rgba(59, 130, 246, 0.4), rgba(236, 72, 153, 0.4))';
                break;
            case 'gradient2':
                bgImage = 'linear-gradient(45deg, rgba(16, 185, 129, 0.4), rgba(59, 130, 246, 0.4))';
                break;
            case 'gradient3':
                bgImage = 'linear-gradient(45deg, rgba(245, 158, 11, 0.4), rgba(239, 68, 68, 0.4))';
                break;
        }

        previewContainer.style.backgroundImage = `url('/api/placeholder/400/400'), ${bgImage}`;
    });
});

// Animation buttons
floatBtn.addEventListener('click', () => {
    preview.style.animation = '';
    animationDemo.style.display = 'flex';
    animationDemo.style.animation = 'float 3s ease-in-out infinite';
    updatePreview(true);
});

pulseBtn.addEventListener('click', () => {
    preview.style.animation = '';
    animationDemo.style.display = 'flex';
    animationDemo.style.animation = 'pulse 2s ease-in-out infinite';
    updatePreview(true);

    // Add pulse animation if not exists
    if (!document.querySelector('style#pulse-animation')) {
        const style = document.createElement('style');
        style.id = 'pulse-animation';
        style.textContent = `
          @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
          }
        `;
        document.head.appendChild(style);
    }
});

shakeBtn.addEventListener('click', () => {
    preview.style.animation = '';
    animationDemo.style.display = 'flex';
    animationDemo.style.animation = 'shake 0.82s cubic-bezier(.36,.07,.19,.97) infinite';
    updatePreview(true);

    // Add shake animation if not exists
    if (!document.querySelector('style#shake-animation')) {
        const style = document.createElement('style');
        style.id = 'shake-animation';
        style.textContent = `
          @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
          }
        `;
        document.head.appendChild(style);
    }
});

// Preset configurations
const presets = {
    subtle: {
        opacity: 0.5,
        blur: 5,
        border: 1,
        borderOpacity: 0.05,
        radius: 12,
        shadow: 0.1,
        shadowBlur: 20,
        shadowSpread: 0
    },
    medium: {
        opacity: 0.7,
        blur: 10,
        border: 1,
        borderOpacity: 0.1,
        radius: 16,
        shadow: 0.25,
        shadowBlur: 30,
        shadowSpread: 0
    },
    heavy: {
        opacity: 0.8,
        blur: 20,
        border: 2,
        borderOpacity: 0.2,
        radius: 20,
        shadow: 0.4,
        shadowBlur: 40,
        shadowSpread: 5
    },
    frosted: {
        opacity: 0.3,
        blur: 30,
        border: 0,
        borderOpacity: 0,
        radius: 8,
        shadow: 0.1,
        shadowBlur: 10,
        shadowSpread: 0
    },
    neon: {
        opacity: 0.6,
        blur: 15,
        border: 2,
        borderOpacity: 0.5,
        radius: 24,
        shadow: 0.5,
        shadowBlur: 50,
        shadowSpread: 5
    }
};

// Set preset values
const presetButtons = document.querySelectorAll('.preset');
presetButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const preset = presets[btn.dataset.preset];

        opacitySlider.value = preset.opacity;
        blurSlider.value = preset.blur;
        borderSlider.value = preset.border;
        borderOpacitySlider.value = preset.borderOpacity;
        radiusSlider.value = preset.radius;
        shadowSlider.value = preset.shadow;
        shadowBlurSlider.value = preset.shadowBlur;
        shadowSpreadSlider.value = preset.shadowSpread;

        updatePreview();
    });
});

// Gallery examples
const examples = [
    { name: 'Card', opacity: 0.7, blur: 10, border: 1, borderOpacity: 0.1, radius: 16 },
    { name: 'Modal', opacity: 0.8, blur: 15, border: 1, borderOpacity: 0.15, radius: 12 },
    { name: 'Nav Bar', opacity: 0.5, blur: 8, border: 1, borderOpacity: 0.1, radius: 8 },
    { name: 'Toast', opacity: 0.75, blur: 6, border: 1, borderOpacity: 0.2, radius: 8 },
    { name: 'Sidebar', opacity: 0.6, blur: 12, border: 0, borderOpacity: 0, radius: 0 },
    { name: 'Button', opacity: 0.5, blur: 4, border: 1, borderOpacity: 0.3, radius: 20 }
];

// Generate gallery examples
function generateGallery() {
    exampleGallery.innerHTML = '';

    examples.forEach((example, index) => {
        const item = document.createElement('div');
        item.className = 'gallery-item';
        item.style.background = `linear-gradient(45deg, rgba(42, 144, 247, 0.4), rgba(37, 241, 152, 0.4))`;

        const card = document.createElement('div');
        card.className = 'gallery-card';
        card.textContent = example.name;
        card.style.background = `rgba(255, 255, 255, ${example.opacity})`;
        card.style.backdropFilter = `blur(${example.blur}px)`;
        card.style.webkitBackdropFilter = `blur(${example.blur}px)`;
        card.style.border = `${example.border}px solid rgba(255, 255, 255, ${example.borderOpacity})`;
        card.style.borderRadius = `${example.radius}px`;

        item.appendChild(card);
        exampleGallery.appendChild(item);

        item.addEventListener('click', () => {
            opacitySlider.value = example.opacity;
            blurSlider.value = example.blur;
            borderSlider.value = example.border;
            borderOpacitySlider.value = example.borderOpacity;
            radiusSlider.value = example.radius;

            updatePreview();
            galleryModal.classList.remove('active');
        });
    });
}

// Modal handling
helpBtn.addEventListener('click', () => {
    helpModal.classList.add('active');
});

galleryBtn.addEventListener('click', () => {
    generateGallery();
    galleryModal.classList.add('active');
});

closeHelpModal.addEventListener('click', () => {
    helpModal.classList.remove('active');
});

closeGalleryModal.addEventListener('click', () => {
    galleryModal.classList.remove('active');
});

// Close modals when clicking outside
document.addEventListener('click', (event) => {
    if (event.target === helpModal) {
        helpModal.classList.remove('active');
    }
    if (event.target === galleryModal) {
        galleryModal.classList.remove('active');
    }
});

// Color picker handling
bgColorPicker.addEventListener('input', (e) => {
    bgColorHex.textContent = e.target.value;
    updatePreview();
});

borderColorPicker.addEventListener('input', (e) => {
    borderColorHex.textContent = e.target.value;
    updatePreview();
});

shadowColorPicker.addEventListener('input', (e) => {
    shadowColorHex.textContent = e.target.value;
    updatePreview();
});

// Copy button handling
copyCssBtn.addEventListener('click', () => copyToClipboard(cssSyntax.textContent, copyCssBtn));
copyScssBtn.addEventListener('click', () => copyToClipboard(scssSyntax.textContent, copyScssBtn));
copyTailwindBtn.addEventListener('click', () => copyToClipboard(tailwindSyntax.textContent, copyTailwindBtn));
copyReactBtn.addEventListener('click', () => copyToClipboard(reactSyntax.textContent, copyReactBtn));

function copyToClipboard(text, button) {
    navigator.clipboard.writeText(text).then(() => {
        const originalText = button.textContent;
        button.textContent = 'Copied!';
        setTimeout(() => {
            button.textContent = originalText;
        }, 2000);
    });
}

// Convert hex to RGB
function hexToRgb(hex) {
    // Remove # if present
    hex = hex.replace(/^#/, '');

    // Parse the hex values
    const r = parseInt(hex.substring(0, 2), 16);
    const g = parseInt(hex.substring(2, 4), 16);
    const b = parseInt(hex.substring(4, 6), 16);

    return { r, g, b };
}

// Update preview and code based on all controls
function updatePreview(isAnimation = false) {
    const isDarkTheme = !document.body.classList.contains('light-theme');

    // Get basic values
    const opacity = opacitySlider.value;
    const blur = blurSlider.value;
    const border = borderSlider.value;
    const radius = radiusSlider.value;

    // Get advanced values
    const borderOpacity = borderOpacitySlider.value;
    const shadow = shadowSlider.value;
    const shadowBlur = shadowBlurSlider.value;
    const shadowSpread = shadowSpreadSlider.value;

    // Get animation values
    const hoverScale = hoverScaleSlider.value;
    const hoverOpacity = hoverOpacitySlider.value;
    const transition = transitionSlider.value;

    // Get color values
    const bgColorValue = bgColorPicker.value;
    const borderColorValue = borderColorPicker.value;
    const shadowColorValue = shadowColorPicker.value;

    // Convert hex to RGB
    const bgColorRGB = hexToRgb(bgColorValue);
    const borderColorRGB = hexToRgb(borderColorValue);
    const shadowColorRGB = hexToRgb(shadowColorValue);

    // Update value displays
    opacityValue.textContent = opacity;
    blurValue.textContent = `${blur}px`;
    borderValue.textContent = `${border}px`;
    borderOpacityValue.textContent = borderOpacity;
    radiusValue.textContent = `${radius}px`;
    shadowValue.textContent = shadow;
    shadowBlurValue.textContent = `${shadowBlur}px`;
    shadowSpreadValue.textContent = `${shadowSpread}px`;
    hoverScaleValue.textContent = hoverScale;
    hoverOpacityValue.textContent = hoverOpacity;
    transitionValue.textContent = `${transition}s`;

    // Generate background color
    const baseColor = isDarkTheme ? `${bgColorRGB.r}, ${bgColorRGB.g}, ${bgColorRGB.b}` : `${bgColorRGB.r}, ${bgColorRGB.g}, ${bgColorRGB.b}`;
    const bgColor = `rgba(${baseColor}, ${opacity})`;

    // Generate border color
    const baseBorderColor = `${borderColorRGB.r}, ${borderColorRGB.g}, ${borderColorRGB.b}`;
    const borderColor = `rgba(${baseBorderColor}, ${borderOpacity})`;

    // Generate shadow color
    const baseShadowColor = `${shadowColorRGB.r}, ${shadowColorRGB.g}, ${shadowColorRGB.b}`;
    const shadowColor = `rgba(${baseShadowColor}, ${shadow})`;

    // Apply to preview or animation demo
    const targetElement = isAnimation ? animationDemo : preview;

    targetElement.style.background = bgColor;
    targetElement.style.backdropFilter = `blur(${blur}px)`;
    targetElement.style.webkitBackdropFilter = `blur(${blur}px)`;
    targetElement.style.border = `${border}px solid ${borderColor}`;
    targetElement.style.borderRadius = `${radius}px`;
    targetElement.style.boxShadow = `0 4px ${shadowBlur}px ${shadowSpread}px ${shadowColor}`;
    targetElement.style.transition = `all ${transition}s ease`;

    // Generate CSS code
    const css = `/* Glassmorphism effect */
.glass {
  background: rgba(${baseColor}, ${opacity});
  backdrop-filter: blur(${blur}px);
  -webkit-backdrop-filter: blur(${blur}px);
  border: ${border}px solid rgba(${baseBorderColor}, ${borderOpacity});
  border-radius: ${radius}px;
  box-shadow: 0 4px ${shadowBlur}px ${shadowSpread}px rgba(${baseShadowColor}, ${shadow});
  transition: all ${transition}s ease;
}

/* Optional: Hover effect */
.glass:hover {
  transform: scale(${hoverScale});
  background: rgba(${baseColor}, ${parseFloat(opacity) + parseFloat(hoverOpacity)});
}`;

    // Generate SCSS code
    const scss = `// Glassmorphism mixin
@mixin glassmorphism(
  $bg-color: ${baseColor},
  $bg-opacity: ${opacity},
  $blur: ${blur}px,
  $border-width: ${border}px,
  $border-color: ${baseBorderColor},
  $border-opacity: ${borderOpacity},
  $radius: ${radius}px,
  $shadow-color: ${baseShadowColor},
  $shadow-opacity: ${shadow},
  $shadow-blur: ${shadowBlur}px,
  $shadow-spread: ${shadowSpread}px,
  $transition: ${transition}s
) {
  background: rgba($bg-color, $bg-opacity);
  backdrop-filter: blur($blur);
  -webkit-backdrop-filter: blur($blur);
  border: $border-width solid rgba($border-color, $border-opacity);
  border-radius: $radius;
  box-shadow: 0 4px $shadow-blur $shadow-spread rgba($shadow-color, $shadow-opacity);
  transition: all $transition ease;
  
  &:hover {
    transform: scale(${hoverScale});
    background: rgba($bg-color, $bg-opacity + ${hoverOpacity});
  }
}

.glass {
  @include glassmorphism();
}`;

    // Generate Tailwind CSS
    const opacityPercent = Math.round(opacity * 100);
    const borderOpacityPercent = Math.round(borderOpacity * 100);
    const tailwind = `<!-- Glassmorphism with Tailwind CSS -->
<div class="bg-white/${opacityPercent} backdrop-blur-[${blur}px] border border-white/${borderOpacityPercent} rounded-[${radius}px] shadow-lg transition duration-${Math.round(transition * 300)} hover:scale-${Math.round(hoverScale * 100)} hover:bg-white/${Math.round((parseFloat(opacity) + parseFloat(hoverOpacity)) * 100)}"></div>`;

    // Generate React component
    const react = `import React from 'react';

const GlassmorphicCard = ({ children, className = '' }) => {
  return (
    <div
      className={\`
        bg-white/${opacityPercent} dark:bg-gray-800/${opacityPercent}
        backdrop-blur-md
        border border-white/${borderOpacityPercent} dark:border-gray-700/${borderOpacityPercent}
        rounded-2xl
        shadow-lg
        transition duration-${Math.round(transition * 300)}
        hover:scale-${Math.round(hoverScale * 100)}
        hover:bg-white/${Math.round((parseFloat(opacity) + parseFloat(hoverOpacity)) * 100)}
        \${className}
      \`}
      style={{
        '--tw-backdrop-blur': 'blur(${blur}px)',
        borderRadius: '${radius}px',
        boxShadow: '0 4px ${shadowBlur}px ${shadowSpread}px rgba(${baseShadowColor}, ${shadow})'
      }}
    >
      {children}
    </div>
  );
};

export default GlassmorphicCard;`;

    // Update code displays
    cssSyntax.textContent = css;
    scssSyntax.textContent = scss;
    tailwindSyntax.textContent = tailwind;
    reactSyntax.textContent = react;

    // Add hover effect to preview
    preview.onmouseenter = function () {
        this.style.transform = `scale(${hoverScale})`;
        this.style.background = `rgba(${baseColor}, ${parseFloat(opacity) + parseFloat(hoverOpacity)})`;
    };

    preview.onmouseleave = function () {
        this.style.transform = 'scale(1)';
        this.style.background = bgColor;
    };
}

// Initialize with default values
document.addEventListener('DOMContentLoaded', () => {
    // Set initial color values
    bgColorHex.textContent = bgColorPicker.value;
    borderColorHex.textContent = borderColorPicker.value;
    shadowColorHex.textContent = shadowColorPicker.value;

    // Set up event listeners for all range inputs
    const rangeInputs = document.querySelectorAll('input[type="range"]');
    rangeInputs.forEach(input => {
        input.addEventListener('input', updatePreview);
    });

    // Initial preview update
    updatePreview();

    // Show animation demo button
    document.querySelector('.animation-controls').style.display = 'flex';
});

// Add a reset button functionality
const resetBtn = document.createElement('button');
resetBtn.className = 'copy-btn';
resetBtn.textContent = 'Reset All';
resetBtn.style.backgroundColor = '#ef4444';
document.querySelector('.preset-selector').appendChild(resetBtn);

resetBtn.addEventListener('click', () => {
    // Reset to default medium preset
    const preset = presets.medium;

    opacitySlider.value = preset.opacity;
    blurSlider.value = preset.blur;
    borderSlider.value = preset.border;
    borderOpacitySlider.value = preset.borderOpacity;
    radiusSlider.value = preset.radius;
    shadowSlider.value = preset.shadow;
    shadowBlurSlider.value = preset.shadowBlur;
    shadowSpreadSlider.value = preset.shadowSpread;

    // Reset color pickers
    bgColorPicker.value = '#ffffff';
    borderColorPicker.value = '#ffffff';
    shadowColorPicker.value = '#000000';

    // Reset animation values
    hoverScaleSlider.value = 1.05;
    hoverOpacitySlider.value = 0.1;
    transitionSlider.value = 0.3;

    // Update color hex displays
    bgColorHex.textContent = bgColorPicker.value;
    borderColorHex.textContent = borderColorPicker.value;
    shadowColorHex.textContent = shadowColorPicker.value;

    // Reset animations
    preview.style.animation = '';
    animationDemo.style.display = 'none';

    updatePreview();
});

// Function to export settings as JSON
function exportSettings() {
    const settings = {
        basic: {
            opacity: opacitySlider.value,
            blur: blurSlider.value,
            border: borderSlider.value,
            radius: radiusSlider.value
        },
        advanced: {
            borderOpacity: borderOpacitySlider.value,
            shadow: shadowSlider.value,
            shadowBlur: shadowBlurSlider.value,
            shadowSpread: shadowSpreadSlider.value
        },
        animation: {
            hoverScale: hoverScaleSlider.value,
            hoverOpacity: hoverOpacitySlider.value,
            transition: transitionSlider.value
        },
        colors: {
            background: bgColorPicker.value,
            border: borderColorPicker.value,
            shadow: shadowColorPicker.value
        }
    };

    const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(settings, null, 2));
    const downloadAnchorNode = document.createElement('a');
    downloadAnchorNode.setAttribute("href", dataStr);
    downloadAnchorNode.setAttribute("download", "glassmorphism-settings.json");
    document.body.appendChild(downloadAnchorNode);
    downloadAnchorNode.click();
    downloadAnchorNode.remove();
}

// Add export button
const exportBtn = document.createElement('button');
exportBtn.className = 'copy-btn';
exportBtn.textContent = 'Export Settings';
exportBtn.style.marginLeft = 'auto';
document.querySelector('.preset-selector').appendChild(exportBtn);

exportBtn.addEventListener('click', exportSettings);

// Add import functionality
const importInput = document.createElement('input');
importInput.type = 'file';
importInput.accept = '.json';
importInput.style.display = 'none';
document.body.appendChild(importInput);

importInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            try {
                const settings = JSON.parse(e.target.result);

                // Apply imported settings
                opacitySlider.value = settings.basic.opacity;
                blurSlider.value = settings.basic.blur;
                borderSlider.value = settings.basic.border;
                radiusSlider.value = settings.basic.radius;

                borderOpacitySlider.value = settings.advanced.borderOpacity;
                shadowSlider.value = settings.advanced.shadow;
                shadowBlurSlider.value = settings.advanced.shadowBlur;
                shadowSpreadSlider.value = settings.advanced.shadowSpread;

                hoverScaleSlider.value = settings.animation.hoverScale;
                hoverOpacitySlider.value = settings.animation.hoverOpacity;
                transitionSlider.value = settings.animation.transition;

                bgColorPicker.value = settings.colors.background;
                borderColorPicker.value = settings.colors.border;
                shadowColorPicker.value = settings.colors.shadow;

                // Update color hex displays
                bgColorHex.textContent = bgColorPicker.value;
                borderColorHex.textContent = borderColorPicker.value;
                shadowColorHex.textContent = shadowColorPicker.value;

                updatePreview();

                alert('Settings imported successfully!');
            } catch (error) {
                alert('Error importing settings: ' + error.message);
            }
        };
        reader.readAsText(file);
    }
});

// Add import button
const importBtn = document.createElement('button');
importBtn.className = 'copy-btn';
importBtn.textContent = 'Import Settings';
importBtn.style.marginLeft = '10px';
document.querySelector('.preset-selector').appendChild(importBtn);

importBtn.addEventListener('click', () => {
    importInput.click();
});

// Add random button to generate random glassmorphism styles
const randomBtn = document.createElement('button');
randomBtn.className = 'copy-btn';
randomBtn.textContent = 'Random Style';
randomBtn.style.backgroundColor = '#8b5cf6';
randomBtn.style.marginLeft = '10px';
document.querySelector('.preset-selector').appendChild(randomBtn);

function getRandomValue(min, max, step = 1) {
    const steps = Math.floor((max - min) / step);
    return min + (Math.floor(Math.random() * steps) * step);
}

randomBtn.addEventListener('click', () => {
    // Generate random values
    opacitySlider.value = Math.random().toFixed(2);
    blurSlider.value = getRandomValue(0, 30);
    borderSlider.value = getRandomValue(0, 5, 0.5);
    radiusSlider.value = getRandomValue(0, 32);

    borderOpacitySlider.value = Math.random().toFixed(2);
    shadowSlider.value = Math.random().toFixed(2);
    shadowBlurSlider.value = getRandomValue(0, 100);
    shadowSpreadSlider.value = getRandomValue(-20, 20);

    hoverScaleSlider.value = (1 + Math.random() * 0.2).toFixed(2);
    hoverOpacitySlider.value = (Math.random() * 0.5).toFixed(2);
    transitionSlider.value = (Math.random() * 0.9 + 0.1).toFixed(1);

    // Random colors
    const randomColor = () => {
        const r = Math.floor(Math.random() * 256).toString(16).padStart(2, '0');
        const g = Math.floor(Math.random() * 256).toString(16).padStart(2, '0');
        const b = Math.floor(Math.random() * 256).toString(16).padStart(2, '0');
        return `#${r}${g}${b}`;
    };

    bgColorPicker.value = randomColor();
    borderColorPicker.value = randomColor();
    shadowColorPicker.value = randomColor();

    // Update color hex displays
    bgColorHex.textContent = bgColorPicker.value;
    borderColorHex.textContent = borderColorPicker.value;
    shadowColorHex.textContent = shadowColorPicker.value;

    updatePreview();
});

// Add a shareable URL feature
function generateShareableUrl() {
    // Collect all current settings
    const settings = {
        o: opacitySlider.value,
        b: blurSlider.value,
        bw: borderSlider.value,
        r: radiusSlider.value,
        bo: borderOpacitySlider.value,
        s: shadowSlider.value,
        sb: shadowBlurSlider.value,
        ss: shadowSpreadSlider.value,
        hs: hoverScaleSlider.value,
        ho: hoverOpacitySlider.value,
        t: transitionSlider.value,
        bgc: bgColorPicker.value.replace('#', ''),
        bc: borderColorPicker.value.replace('#', ''),
        sc: shadowColorPicker.value.replace('#', '')
    };

    // Convert to base64 to make URL shorter
    const settingsStr = btoa(JSON.stringify(settings));

    // Create the shareable URL
    const url = new URL(window.location.href);
    url.searchParams.set('settings', settingsStr);

    return url.toString();
}

// Copy shareable URL to clipboard
function copyShareableUrl() {
    const url = generateShareableUrl();
    navigator.clipboard.writeText(url).then(() => {
        alert('Shareable URL copied to clipboard!');
    }).catch(err => {
        console.error('Error copying to clipboard:', err);
        // Fallback
        const tempInput = document.createElement('input');
        tempInput.value = url;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        alert('Shareable URL copied to clipboard!');
    });
}

// Add share button
const shareBtn = document.createElement('button');
shareBtn.className = 'copy-btn';
shareBtn.textContent = 'Share Settings';
shareBtn.style.backgroundColor = '#10b981';
shareBtn.style.marginLeft = '10px';
document.querySelector('.preset-selector').appendChild(shareBtn);

shareBtn.addEventListener('click', copyShareableUrl);

// Check for settings in URL when page loads
function loadSettingsFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const settingsParam = urlParams.get('settings');

    if (settingsParam) {
        try {
            const settings = JSON.parse(atob(settingsParam));

            // Apply settings
            opacitySlider.value = settings.o;
            blurSlider.value = settings.b;
            borderSlider.value = settings.bw;
            radiusSlider.value = settings.r;

            borderOpacitySlider.value = settings.bo;
            shadowSlider.value = settings.s;
            shadowBlurSlider.value = settings.sb;
            shadowSpreadSlider.value = settings.ss;

            hoverScaleSlider.value = settings.hs;
            hoverOpacitySlider.value = settings.ho;
            transitionSlider.value = settings.t;

            bgColorPicker.value = '#' + settings.bgc;
            borderColorPicker.value = '#' + settings.bc;
            shadowColorPicker.value = '#' + settings.sc;

            // Update color hex displays
            bgColorHex.textContent = bgColorPicker.value;
            borderColorHex.textContent = borderColorPicker.value;
            shadowColorHex.textContent = shadowColorPicker.value;

            updatePreview();

            // Show notification
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = 'Settings loaded from shared URL';
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.classList.add('show');
                setTimeout(() => {
                    notification.classList.remove('show');
                    setTimeout(() => {
                        notification.remove();
                    }, 500);
                }, 2000);
            }, 100);

        } catch (error) {
            console.error('Error loading settings from URL:', error);
        }
    }
}

// Add CSS for notification
const notificationStyle = document.createElement('style');
notificationStyle.textContent = `
    .notification {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: rgba(16, 185, 129, 0.9);
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transform: translateY(100%);
        opacity: 0;
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .notification.show {
        transform: translateY(0);
        opacity: 1;
    }
`;
document.head.appendChild(notificationStyle);

// Add ability to download as an image
function downloadAsImage() {
    // Create a new canvas
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    // Set canvas dimensions
    const previewRect = preview.getBoundingClientRect();
    const containerRect = previewContainer.getBoundingClientRect();

    canvas.width = containerRect.width;
    canvas.height = containerRect.height;

    // Draw background
    ctx.fillStyle = getComputedStyle(previewContainer).backgroundColor;
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Draw background image/gradient if any
    const bgImage = getComputedStyle(previewContainer).backgroundImage;
    if (bgImage && bgImage !== 'none') {
        // This is a simplified approach, for complex backgrounds you'd need images
        const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.4)');
        gradient.addColorStop(1, 'rgba(236, 72, 153, 0.4)');
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
    }

    // Calculate the position of the preview element in the canvas
    const previewX = (canvas.width - previewRect.width) / 2;
    const previewY = (canvas.height - previewRect.height) / 2;

    // Get current styles
    const styles = getComputedStyle(preview);

    // Draw the glass effect
    ctx.save();

    // Draw shadow
    const shadowBlur = parseFloat(shadowBlurSlider.value);
    const shadowColor = styles.boxShadow.split('rgba')[1]?.split(')')[0];
    if (shadowColor) {
        ctx.shadowOffsetX = 0;
        ctx.shadowOffsetY = 4;
        ctx.shadowBlur = shadowBlur / 2; // Canvas shadow blur differs from CSS
        ctx.shadowColor = `rgba${shadowColor})`;
    }

    // Draw background
    ctx.fillStyle = styles.backgroundColor;
    ctx.beginPath();
    const radius = parseFloat(styles.borderRadius);
    ctx.roundRect(previewX, previewY, previewRect.width, previewRect.height, radius);
    ctx.fill();

    // Draw border
    ctx.strokeStyle = styles.borderColor;
    ctx.lineWidth = parseFloat(styles.borderWidth || 1);
    ctx.stroke();

    // Draw text
    ctx.shadowColor = 'transparent'; // Remove shadow for text
    ctx.fillStyle = '#000';
    ctx.font = '16px Arial';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText('Glassmorphism Effect', previewX + previewRect.width / 2, previewY + previewRect.height / 2);

    ctx.restore();

    // Convert canvas to image and download
    const dataUrl = canvas.toDataURL('image/png');
    const downloadLink = document.createElement('a');
    downloadLink.href = dataUrl;
    downloadLink.download = 'glassmorphism.png';
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}

// Add download image button
const downloadImageBtn = document.createElement('button');
downloadImageBtn.className = 'copy-btn';
downloadImageBtn.textContent = 'Download Image';
downloadImageBtn.style.backgroundColor = '#6366f1';
downloadImageBtn.style.marginLeft = '10px';
document.querySelector('.preset-selector').appendChild(downloadImageBtn);

downloadImageBtn.addEventListener('click', downloadAsImage);

// Add preloaded backgrounds
const backgroundLibrary = [
    { name: 'City Lights', url: '/api/placeholder/900/600', type: 'image' },
    { name: 'Abstract', url: '/api/placeholder/900/600', type: 'image' },
    { name: 'Nature', url: '/api/placeholder/900/600', type: 'image' }
];

// Create a backgrounds dropdown
const bgDropdownContainer = document.createElement('div');
bgDropdownContainer.className = 'bg-dropdown-container';
bgDropdownContainer.innerHTML = `
    <button class="bg-dropdown-btn">Backgrounds</button>
    <div class="bg-dropdown-content">
        <div class="bg-dropdown-header">
            <h3>Select Background</h3>
        </div>
        <div class="bg-dropdown-items"></div>
    </div>
`;

// Add dropdown styles
const dropdownStyle = document.createElement('style');
dropdownStyle.textContent = `
    .bg-dropdown-container {
        position: relative;
        display: inline-block;
        margin-left: 10px;
    }
    
    .bg-dropdown-btn {
        background-color: #4f46e5;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .bg-dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 250px;
        background-color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        z-index: 1;
        overflow: hidden;
    }
    
    .bg-dropdown-container:hover .bg-dropdown-content {
        display: block;
    }
    
    .bg-dropdown-header {
        padding: 10px 15px;
        background-color: #f3f4f6;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .bg-dropdown-header h3 {
        margin: 0;
        font-size: 14px;
    }
    
    .bg-dropdown-items {
        padding: 10px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }
    
    .bg-item {
        height: 60px;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    
    .bg-item:hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.2);
    }
    
    .bg-item-name {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 4px 8px;
        font-size: 12px;
    }
`;
document.head.appendChild(dropdownStyle);

// Add to DOM
document.querySelector('.background-controls').appendChild(bgDropdownContainer);

// Add background items
const bgItemsContainer = bgDropdownContainer.querySelector('.bg-dropdown-items');

// Add custom gradients
const gradients = [
    { name: 'Sunset', colors: 'linear-gradient(45deg, #FF512F, #DD2476)' },
    { name: 'Ocean', colors: 'linear-gradient(45deg, #2193b0, #6dd5ed)' },
    { name: 'Meadow', colors: 'linear-gradient(45deg, #134E5E, #71B280)' },
    { name: 'Lavender', colors: 'linear-gradient(45deg, #834d9b, #d04ed6)' },
    { name: 'Midnight', colors: 'linear-gradient(45deg, #0F2027, #203A43, #2C5364)' },
    { name: 'Sunrise', colors: 'linear-gradient(45deg, #f5af19, #f12711)' }
];

// Add gradients to dropdown
gradients.forEach(gradient => {
    const bgItem = document.createElement('div');
    bgItem.className = 'bg-item';
    bgItem.style.background = gradient.colors;
    bgItem.innerHTML = `<div class="bg-item-name">${gradient.name}</div>`;

    bgItem.addEventListener('click', () => {
        previewContainer.style.backgroundImage = gradient.colors;
    });

    bgItemsContainer.appendChild(bgItem);
});

// Add images to dropdown
backgroundLibrary.forEach(bg => {
    const bgItem = document.createElement('div');
    bgItem.className = 'bg-item';
    bgItem.style.backgroundImage = `url(${bg.url})`;
    bgItem.innerHTML = `<div class="bg-item-name">${bg.name}</div>`;

    bgItem.addEventListener('click', () => {
        previewContainer.style.backgroundImage = `url(${bg.url})`;
    });

    bgItemsContainer.appendChild(bgItem);
});

// Add a noise texture option
const noiseItem = document.createElement('div');
noiseItem.className = 'bg-item';
noiseItem.style.background = 'url("data:image/png;base64,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")';
noiseItem.innerHTML = `<div class="bg-item-name">Noise Texture</div>`;

noiseItem.addEventListener('click', () => {
    previewContainer.style.backgroundImage = 'url("data:image/png;base64,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")';
});

bgItemsContainer.appendChild(noiseItem);

// Call load settings from URL
document.addEventListener('DOMContentLoaded', () => {
    // Previous initialization code...

    // Also check for URL settings
    loadSettingsFromUrl();
});

// Add media query support for mobile devices
const mediaQueryStyle = document.createElement('style');
mediaQueryStyle.textContent = `
    @media (max-width: 768px) {
        main {
            flex-direction: column;
        }
        
        .controls, .preview-container, .code-container {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .preset-selector {
            flex-wrap: wrap;
        }
        
        .preset {
            margin-bottom: 10px;
        }
        
        .copy-btn, .bg-dropdown-btn {
            padding: 6px 10px;
            font-size: 12px;
        }
    }
`;
document.head.appendChild(mediaQueryStyle);