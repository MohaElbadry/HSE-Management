import { Text, View, TouchableOpacity } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";

export default function Projet({ navigation }) {
    return (
        /* This is a React Native component that renders a page for adding complaints. It includes a three buttons for adding different types of
       complaints. 
        The `navigation` prop is used to handle navigation between different screens. */
        <View className="flex-1 bg-[#1E1E1E] ">
            <View className=" flex  w-full flex-row justify-between rounded-b-3xl bg-[#2d2d2d]  px-4 pb-8 pt-16 drop-shadow-xl">
                <AntDesign
                    name="arrowleft"
                    size={24}
                    color="white"
                    onPress={() => navigation.goBack()}
                />
                <Text className="text-start text-xl font-bold text-white">
                    Complaint Page
                </Text>
                <Text className="text-xl font-extrabold  text-[#4DCFC0]">
                    {"  "}
                </Text>
            </View>

            <View className="mt-24 flex mx-10  items-center justify-center pl-5">
                <TouchableOpacity
                    className="mb-4 w-full  rounded-2xl bg-[#006fff] p-3  shadow-xl"
                    onPress={() => navigation.navigate("AddIncident")}
                >
                    <Text className="px-4 py-2 text-3xl text-center font-semibold text-white">
                        Add incidenet
                    </Text>
                </TouchableOpacity>
                <TouchableOpacity
                    className="mb-4 w-full  rounded-2xl bg-[#006fff] p-3  shadow-xl"
                    onPress={() => navigation.navigate("AddRisk")}
                >
                    <Text className="px-4 py-2 text-3xl text-center font-semibold text-white">
                        Add Risk
                    </Text>
                </TouchableOpacity>
                <TouchableOpacity
                    className="mb-4 w-full  rounded-2xl bg-[#006fff] p-3  shadow-xl"
                    onPress={() => navigation.navigate("AddEmergencie")}
                >
                    <Text className="px-4 py-2 text-3xl text-center font-semibold text-white">
                        Add Emergencie
                    </Text>
                </TouchableOpacity>
            </View>

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("UserTasksList")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#69b4ff] ">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("ProjSites")}
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
