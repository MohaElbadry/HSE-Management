import { Image, Text, View, TouchableOpacity } from "react-native";

export default function Home({ navigation }) {
    return (
        /* The code is defining a React Native component called "Home" that renders a view with an
       image, some text, and a button.
        The button is a TouchableOpacity component that navigates to the "Login" screen
       when pressed.
        */
        <View
            className="mt-4 flex-1 flex-col  items-center justify-center "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View
                className="  w-full basis-2/3  items-center justify-center rounded-br-full shadow-md "
                style={{
                    backgroundColor: "#FFFFFF",
                    borderBottomLeftRadius: 150,
                    borderBottomRightRadius: 150,
                }}
            >
                <Image
                    source={require("../assets/HSE-2.2png.png")}
                    className="mt-240 h-2/3 w-96 rotate-180  items-center self-center bg-white from-neutral-50 drop-shadow-xl"
                />
            </View>
            <View className="w-full basis-1/3 flex-col  items-center ">
                <Text className=" mt-7  text-2xl font-bold text-[#1a1613]">
                    Better safe than sorry."
                </Text>
                <Text className="mt-5 px-9  text-xs font-semibold text-[#E1FOD7] ">
                    Prioritize safety, health, and the environment with our app.
                    Ensure a secure and sustainable future for all.
                </Text>
                <TouchableOpacity
                    className="absolute bottom-10 mt-8 h-12 w-60 justify-center self-center rounded-lg bg-[#1B2223]   shadow-lg"
                    onPress={() => navigation.navigate("Login")}
                >
                    <Text className=" self-center text-xl font-bold text-white">
                        Next
                    </Text>
                </TouchableOpacity>
            </View>
        </View>
    );
}
